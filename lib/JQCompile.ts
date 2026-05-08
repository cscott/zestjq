import type { ASTNode, JQFilter, JQValue, FilterFn } from './internal.js';
import { JQEnv, assertNever, assertNotPath } from './internal.js';

export class JQCompile {
	public static compile( ast: ASTNode, env: JQEnv ): JQFilter {
		const compiler = new JQCompile();
		const fn = compiler.compileNode( ast );
		return ( input: JQValue ) => fn( input, env );
	}

	private compileNode( node: ASTNode ): FilterFn {
		switch ( node.type ) {
			case 'literal': return this.compileLiteral( node );
			case 'pipe': return this.compilePipe( node );
			case 'identity': return this.compileIdentity();
			default:
				assertNever( `unimplemented: ${node.type}` );
		}
	}

	private compileLiteral( node: ASTNode ): FilterFn {
		const value = node.value as JQValue;
		return function* ( input: JQValue, env: JQEnv ): Generator<JQValue> {
			assertNotPath( value, env );
			yield value;
		};
	}

	private compilePipe( node: ASTNode ): FilterFn {
		const leftFn = this.compileNode( node.left as ASTNode );
		const rightFn = this.compileNode( node.right as ASTNode );
		return function* ( input: JQValue, env: JQEnv ): Generator<JQValue> {
			for ( const mid of leftFn( input, env ) ) {
				yield* rightFn( mid, env );
			}
		};
	}

	private compileIdentity(): FilterFn {
		return function* ( input: JQValue, _env: JQEnv ): Generator<JQValue> {
			yield input;
		};
	}
}
