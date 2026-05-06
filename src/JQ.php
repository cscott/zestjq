<?php
declare( strict_types = 1 );

namespace Wikimedia\ZestJQ;

use Closure;
use Generator;

/**
 * Main entry point for Zest JQ compiler/evaluator.
 */
class JQ {

	/**
	 * Parse and evaluate a `jq` filter against an input string.
	 *
	 * @param string $input The input to the jq filter.  This must be
	 *  a valid JSON string.
	 * @param string $filter The JQ filter expression
	 * @param ?string $filename An optional filename source for the filter
	 *   expression, used for reporting syntax errors and the `$__loc__`
	 *   built-in.
	 * @param ?JQEnv $env An optional extended environment; see
	 *   `JQEnv::extendEnv()`.
	 * @throws JQError
	 */
	public static function evalString(
		string $input, string $filter,
		?string $filename = null, ?JQEnv $env = null,
	): Generator {
		yield from self::eval(
			JQUtils::jsonDecode( $input ), $filter,
			$filename, $env,
		);
	}

	/**
	 * Parse and evaluate a `jq` filter against an input object.
	 *
	 * @param mixed $input The input to the jq filter.  Note that all
	 *  arrays must be lists; use JQUtils::jsonDecode() to parse into
	 *  the required format.
	 * @param string $filter The JQ filter expression
	 * @param ?string $filename An optional filename source for the filter
	 *   expression, used for reporting syntax errors and the `$__loc__`
	 *   built-in.
	 * @param ?JQEnv $env An optional extended environment; see
	 *   `JQEnv::extendEnv()`.
	 * @throws JQError
	 */
	public static function eval(
		mixed $input, string $filter,
		?string $filename = null, ?JQEnv $env = null,
	): Generator {
		$eval = self::compile( $filter, $filename, $env );
		yield from $eval( $input );
	}

	/**
	 * Parse and compile a `jq` filter, to reduce a closure which can
	 * efficiently be evaluated against multiple inputs.
	 *
	 * @param string $filter The JQ filter expression
	 * @param ?string $filename An optional filename source for the filter
	 *   expression, used for reporting syntax errors and the `$__loc__`
	 *   built-in.
	 * @param ?JQEnv $env An optional extended environment; see
	 *   `JQEnv::extendEnv()`.
	 * @param bool $deferSyntaxError if true, any syntax error in the
	 *   filter expression will not be thrown until the compiled
	 *   filter is evaluated against an input.
	 * @throws JQError
	 */
	public static function compile(
		string $filter, ?string $filename = null,
		?JQEnv $env = null, bool $deferSyntaxError = false
	): Closure {
		$filename ??= $filter;
		try {
			$g = new JQGrammar;
			$ast = $g->parse( $filter );
			return JQCompile::compile( $ast, $env ?? JQEnv::getStdEnv() );
		} catch ( \Wikimedia\WikiPEG\SyntaxError $e ) {
			$loc = strval( $e->location );
			$msg = $e->getMessage();
			$msg = "Syntax error in {$filename} ({$loc}): {$msg}";
			if ( $deferSyntaxError ) {
				// @phan-suppress-next-line PhanPluginNeverReturnFunction, PhanUnusedClosureParameter
				return static function ( $mixed ) use ( $msg ) {
					throw new JQError( $msg );
				};
			}
			throw new JQError( $msg );
		}
	}
}
