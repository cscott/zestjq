<?php
declare( strict_types = 1 );

namespace Wikimedia\Zest;

/**
 * Immutable lexical environment for JQ evaluation.
 *
 * Maps "name/arity" keys to compiled filter closures. bind() returns a new
 * instance rather than mutating, so a base env built from builtin.jq can be
 * shared safely across many independent evaluations. The IOContext object is
 * shared by reference across all envs derived from a common root.
 */
class JQEnv {
	/**
	 * @param array<string,\Closure> $defs  Compiled functions keyed "name/arity"
	 *   e.g. "map/1", "length/0", "foo::bar/2"
	 * @param IOContext $io  Shared I/O context (same object across all derived envs)
	 */
	public function __construct(
		private array $defs = [],
		public IOContext $io = new IOContext(),
	) {
	}

	/**
	 * Return a new env with one additional function binding.
	 *
	 * All filter parameters (including desugared value params) are represented
	 * as \Closure(mixed $input, JQEnv $env): \Generator.
	 *
	 * @param string   $name   Function name (may include a :: namespace)
	 * @param int      $arity  Number of filter arguments
	 * @param \Closure $fn     Compiled body: \Closure(mixed $input, JQEnv $env): \Generator
	 */
	public function bind( string $name, int $arity, \Closure $fn ): self {
		$new = clone $this;
		$new->defs["$name/$arity"] = $fn;
		return $new;
	}

	/**
	 * Look up a compiled function by name and arity.
	 *
	 * Returns null if no definition is found; the caller is responsible for
	 * falling back to the builtin registry or raising a JQError.
	 *
	 * @return ?\Closure \Closure(mixed $input, JQEnv $env): \Generator
	 */
	public function lookup( string $name, int $arity ): ?\Closure {
		return $this->defs["$name/$arity"] ?? null;
	}
}
