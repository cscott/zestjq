<?php
declare( strict_types = 1 );

namespace Wikimedia\Zest;

/** Runtime error thrown by JQ expressions (e.g. error/0, error/1, type errors). */
class JQError extends \RuntimeException {
}
