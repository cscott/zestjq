import { describe, it, expect } from 'vitest';
import * as JQUtils from '../../lib/JQUtils.js';
import { JQError } from '../../lib/JQError.js';
import type { JQValue } from '../../lib/JQValue.js';

describe( 'JQUtils', () => {

	// -----------------------------------------------------------------------
	// toNumber
	// -----------------------------------------------------------------------

	describe( 'toNumber', () => {
		it( 'passes through numbers', () => {
			expect( JQUtils.toNumber( 42 ) ).toBe( 42 );
			expect( JQUtils.toNumber( 3.14 ) ).toBe( 3.14 );
			expect( JQUtils.toNumber( 0 ) ).toBe( 0 );
		} );
		it( 'parses integer string', () => expect( JQUtils.toNumber( '42' ) ).toBe( 42 ) );
		it( 'parses float string', () => expect( JQUtils.toNumber( '3.14' ) ).toBe( 3.14 ) );
		it( 'parses scientific notation', () => expect( JQUtils.toNumber( '1e5' ) ).toBe( 1.0e5 ) );
		it( 'throws on null', () => expect( () => JQUtils.toNumber( null ) ).toThrow( JQError ) );
		it( 'throws on non-numeric string', () => {
			expect( () => JQUtils.toNumber( 'hello' ) ).toThrow( JQError );
		} );
		it( 'throws on array', () => expect( () => JQUtils.toNumber( [] ) ).toThrow( JQError ) );
	} );

	// -----------------------------------------------------------------------
	// toString
	// -----------------------------------------------------------------------

	describe( 'toString', () => {
		const cases: [ string, JQValue, string ][] = [
			[ 'string passes through', 'hello', 'hello' ],
			[ 'empty string passes through', '', '' ],
			[ 'unicode string passes through', 'héllo', 'héllo' ],
			[ 'integer', 42, '42' ],
			[ 'float', 3.14, '3.14' ],
			[ 'null', null, 'null' ],
			[ 'true', true, 'true' ],
			[ 'false', false, 'false' ],
			[ 'array', [ 1, 2, 3 ], '[1,2,3]' ],
			[ 'object', { a: 1 }, '{"a":1}' ],
			[ 'unicode in object', { k: 'café' }, '{"k":"café"}' ],
			[ 'slash unescaped', [ 'a/b' ], '["a/b"]' ],
		];
		for ( const [ label, val, expected ] of cases ) {
			it( label, () => expect( JQUtils.toString( val ) ).toBe( expected ) );
		}
	} );

	// -----------------------------------------------------------------------
	// jsonEncode
	// -----------------------------------------------------------------------

	describe( 'jsonEncode', () => {
		const cases: [ string, JQValue, string ][] = [
			[ 'string gets double-quoted', 'hello', '"hello"' ],
			[ 'empty string', '', '""' ],
			[ 'integer', 42, '42' ],
			[ 'float', 1.5, '1.5' ],
			[ 'null', null, 'null' ],
			[ 'true', true, 'true' ],
			[ 'false', false, 'false' ],
			[ 'array', [ 1, 2 ], '[1,2]' ],
			[ 'object', { x: 1 }, '{"x":1}' ],
			[ 'unicode unescaped', 'café', '"café"' ],
			[ 'slash unescaped', 'a/b', '"a/b"' ],
		];
		for ( const [ label, val, expected ] of cases ) {
			it( label, () => expect( JQUtils.jsonEncode( val ) ).toBe( expected ) );
		}
	} );

	// -----------------------------------------------------------------------
	// jsonDecode
	// -----------------------------------------------------------------------

	describe( 'jsonDecode', () => {
		it( 'decodes scalars', () => {
			expect( JQUtils.jsonDecode( '42' ) ).toBe( 42 );
			expect( JQUtils.jsonDecode( '3.14' ) ).toBe( 3.14 );
			expect( JQUtils.jsonDecode( '"hello"' ) ).toBe( 'hello' );
			expect( JQUtils.jsonDecode( 'null' ) ).toBeNull();
			expect( JQUtils.jsonDecode( 'true' ) ).toBe( true );
			expect( JQUtils.jsonDecode( 'false' ) ).toBe( false );
		} );
		it( 'decodes object', () => {
			const obj = JQUtils.jsonDecode( '{"a":1,"b":"two"}' ) as Record<string, JQValue>;
			expect( obj ).toEqual( { a: 1, b: 'two' } );
			expect( Array.isArray( obj ) ).toBe( false );
		} );
		it( 'decodes array', () => {
			expect( JQUtils.jsonDecode( '[1,2,3]' ) ).toEqual( [ 1, 2, 3 ] );
		} );
		it( 'strips UTF-8 BOM (U+FEFF)', () => {
			expect( JQUtils.jsonDecode( '\uFEFF42' ) ).toBe( 42 );
		} );
		it( 'throws on invalid JSON', () => {
			expect( () => JQUtils.jsonDecode( 'not json' ) ).toThrow( JQError );
		} );
	} );

	// -----------------------------------------------------------------------
	// formatterFor — success cases
	// -----------------------------------------------------------------------

	describe( 'formatterFor', () => {
		const cases: [ string, string, JQValue, string ][] = [
			// @text: same as toString
			[ '@text, string passthrough', 'text', 'hello', 'hello' ],
			[ '@text, integer', 'text', 42, '42' ],
			[ '@text, null', 'text', null, 'null' ],

			// @json: always JSON-encodes, including strings
			[ '@json, string gets quoted', 'json', 'hello', '"hello"' ],
			[ '@json, integer', 'json', 42, '42' ],
			[ '@json, null', 'json', null, 'null' ],
			[ '@json, array', 'json', [ 1, 2 ], '[1,2]' ],

			// @html: HTML-escapes <, >, &, ", '
			[
				'@html, tags and ampersand',
				'html', '<b>Hello & World</b>', '&lt;b&gt;Hello &amp; World&lt;/b&gt;',
			],
			[ '@html, double quotes', 'html', '"quoted"', '&quot;quoted&quot;' ],
			[ '@html, single quote', 'html', "it's", 'it&apos;s' ],
			[ '@html, non-string value', 'html', 42, '42' ],

			// @uri: percent-encodes via encodeURIComponent
			[ '@uri, space', 'uri', 'hello world', 'hello%20world' ],
			[ '@uri, slash', 'uri', 'a/b', 'a%2Fb' ],
			[ '@uri, plus', 'uri', 'a+b', 'a%2Bb' ],
			[ '@uri, unicode', 'uri', 'café', 'caf%C3%A9' ],

			// @urid: percent-decodes; '+' is left as-is
			[ '@urid, space', 'urid', 'hello%20world', 'hello world' ],
			[ '@urid, plus not decoded', 'urid', 'a+b', 'a+b' ],
			[ '@urid, unicode', 'urid', 'caf%C3%A9', 'café' ],

			// @base64
			[ '@base64, hello', 'base64', 'hello', 'aGVsbG8=' ],
			[ '@base64, empty string', 'base64', '', '' ],
			[ '@base64, non-string', 'base64', 42, 'NDI=' ],

			// @base64d
			[ '@base64d, simple', 'base64d', 'aGVsbG8=', 'hello' ],
			[ '@base64d, with surrounding whitespace', 'base64d', '  aGVsbG8=\n', 'hello' ],

			// @sh: wraps in single quotes, replacing ' with '\''
			[ '@sh, simple string', 'sh', 'hello world', "'hello world'" ],
			[ '@sh, empty string', 'sh', '', "''" ],
			[ '@sh, embedded single quote', 'sh', "it's", "'it'\\''s'" ],
			[ '@sh, non-string', 'sh', 42, "'42'" ],

			// @csv
			[
				'@csv, mixed types',
				'csv', [ 1, 'hello', true, false, null ], '1,"hello",true,false,',
			],
			[ '@csv, float', 'csv', [ 1.5 ], '1.5' ],
			[ '@csv, embedded double quote', 'csv', [ '"hi"' ], '"""hi"""' ],

			// @tsv
			[
				'@tsv, mixed types',
				'tsv', [ 1, 'hello', true, false, null ], '1\thello\ttrue\tfalse\t',
			],
			[ '@tsv, tab in string gets escaped', 'tsv', [ 'a\tb' ], 'a\\tb' ],
			[ '@tsv, backslash in string gets escaped', 'tsv', [ 'a\\b' ], 'a\\\\b' ],
			[ '@tsv, newline in string gets escaped', 'tsv', [ 'a\nb' ], 'a\\nb' ],
		];
		for ( const [ label, fmt, input, expected ] of cases ) {
			it( label, () => {
				const fn = JQUtils.formatterFor( fmt );
				expect( fn( input ) ).toBe( expected );
			} );
		}

		// -----------------------------------------------------------------------
		// formatterFor — error cases
		// -----------------------------------------------------------------------

		it( 'throws on unknown format', () => {
			expect( () => JQUtils.formatterFor( 'unknown' ) ).toThrow( Error );
		} );
		it( '@csv requires array input', () => {
			const fn = JQUtils.formatterFor( 'csv' );
			expect( () => fn( 'not an array' ) ).toThrow( JQError );
		} );
		it( '@tsv requires array input', () => {
			const fn = JQUtils.formatterFor( 'tsv' );
			expect( () => fn( 'not an array' ) ).toThrow( JQError );
		} );
		it( '@csv rejects object', () => {
			const fn = JQUtils.formatterFor( 'csv' );
			expect( () => fn( { a: 1 } ) ).toThrow( JQError );
		} );
	} );

} );
