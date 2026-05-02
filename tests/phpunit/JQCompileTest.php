<?php
declare( strict_types = 1 );

namespace Wikimedia\Zest\Tests;

use Wikimedia\Zest\IOContext;
use Wikimedia\Zest\JQCompile;
use Wikimedia\Zest\JQEnv;
use Wikimedia\Zest\JQGrammar;
use Wikimedia\Zest\ZestJQ;

/**
 * JQ evaluation tests driven by the upstream jq test suite from
 * https://github.com/jqlang/jq/blob/master/tests/jq.test
 */
class JQCompileTest extends \PHPUnit\Framework\TestCase {
	public static function compileProvider(): iterable {
		foreach ( JQGrammarTest::loadTests() as $test ) {
			if ( $test['lineno'] > 50 ) {
				return;
			}
			if ( !( $test['fail'] ?? false ) ) {
				yield $test['label'] => [
					$test['query'],
					$test['input'],
					$test['expected'],
				];
			}
		}
	}

	/**
	 * @dataProvider compileProvider
	 * @covers \Wikimedia\Zest\JQCompile
	 */
	public function testCompile( string $query, string $input, array $expected ): void {
		$input = ZestJQ::jsonDecode( $input );
		$expected = array_map( ZestJQ::jsonDecode( ... ), $expected );
		$g = new JQGrammar;
		$ast = $g->parse( $query );
		$env = new JQEnv( null, new IOContext );
		$eval = JQCompile::compile( $ast, $env );
		$result = iterator_to_array( $eval( $input ) );
		$this->assertTrue(
			JQCompile::jqCompare( $expected, $result ) === 0,
			json_encode( $result )
		);
	}
}
