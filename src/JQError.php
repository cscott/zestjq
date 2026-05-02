<?php
declare( strict_types = 1 );

namespace Wikimedia\Zest;

/**
 * Runtime error thrown by JQ expressions (e.g. error/0, type errors).
 *
 * $jqValue carries the original JQ value for try/catch handlers. For errors
 * thrown with a string (e.g. `"msg" | error`), $jqValue is that string. For
 * errors thrown with a non-string value (e.g. `[1,2] | error`), $jqValue is
 * the original array/object/number so that catch handlers receive it intact.
 * For internal type-error strings, $jqValue is set to the message string.
 */
class JQError extends \RuntimeException {

	public readonly mixed $jqValue;

	public function __construct( string $message, mixed $jqValue = null ) {
		parent::__construct( $message );
		$this->jqValue = $jqValue ?? $message;
	}
}
