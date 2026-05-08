#!/usr/bin/env node
'use strict';

const fs = require( 'fs' );
const path = require( 'path' );
const { parse, SyntaxError: JQSyntaxError } = require( '../lib/JQGrammar.js' );

const builtinPath = path.join( __dirname, '../src/builtin.jq' );
const outPath = path.join( __dirname, '../lib/JQBuiltin.js' );

let src;
try {
	src = fs.readFileSync( builtinPath, 'utf8' );
} catch ( e ) {
	process.stderr.write( `Error: could not read ${builtinPath}\n` );
	process.exit( 1 );
}

let ast;
try {
	ast = parse( src + '\n__env__', { filename: '<builtin.jq>' } );
} catch ( e ) {
	if ( e instanceof JQSyntaxError ) {
		process.stderr.write( `Error: could not parse builtin.jq: ${e.message}\n` );
		process.exit( 1 );
	}
	throw e;
}

const jsAst = JSON.stringify( ast );
const content =
	"'use strict';\n" +
	'// Generated file — do not edit directly. Regenerate with: npm run build-stdenv\n' +
	'class JQBuiltin {\n' +
	'\tstatic AST = ' + jsAst + ';\n' +
	'\tstatic getAst() { return this.AST; }\n'+
	'}\n' +
	'module.exports = { JQBuiltin };\n';

try {
	fs.writeFileSync( outPath, content );
} catch ( e ) {
	process.stderr.write( `Error: could not write ${outPath}\n` );
	process.exit( 1 );
}

process.stdout.write( `Written: ${outPath}\n` );
