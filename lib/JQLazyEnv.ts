import type { Binding } from './JQEnv.js';
import { JQEnv, JQBaseEnv } from './JQEnv.js';
import { IOContext } from './IOContext.js';

/**
 * A JQEnv whose standard-library bindings are resolved lazily on first lookup.
 *
 * Constructing a JQLazyEnv costs nothing beyond object allocation.
 * The standard environment is loaded only when lookup() is first called,
 * so the overhead of compiling builtin.jq is not paid unless a built-in
 * function is actually invoked during evaluation.
 *
 * bind() is inherited unchanged: it creates a JQBindEnv whose parent
 * chain eventually reaches this object, so unresolved lookups naturally
 * proxy through here to the standard library.
 *
 * TODO: wire into JQEnv.getStdEnv() once JQTopLevelEnv is ported.
 * TODO: parent should be new JQTopLevelEnv(io) once JQTopLevelEnv is ported.
 */
export class JQLazyEnv extends JQEnv {
	private resolved: JQEnv | null = null;

	public constructor( io: IOContext ) {
		super( null, io );
	}

	public lookup( name: string, arity: number ): Binding | null {
		if ( this.resolved === null ) {
			this.resolved = JQLazyEnv.buildStandardEnv( this.io );
		}
		return this.resolved.lookup( name, arity );
	}

	// Stub: returns an empty env until JQTopLevelEnv and builtin.jq are ported.
	protected static buildStandardEnv( _io: IOContext ): JQEnv {
		return new JQBaseEnv( new IOContext() );
	}
}
