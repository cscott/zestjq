import type { FilterFn, FilterFactory } from './JQUtils.js';
import { JQError } from './JQError.js';
import { IOContext } from './IOContext.js';

export type Binding = FilterFn | FilterFactory;

export abstract class JQEnv {
	public constructor(
		protected readonly parent: JQEnv | null,
		public readonly io: IOContext,
	) {}

	public lookup( name: string, arity: number ): Binding | null {
		return this.parent?.lookup( name, arity ) ?? null;
	}

	public isPathMode(): boolean {
		return false;
	}

	public bind( name: string, arity: number, fn: Binding ): JQEnv {
		// eslint-disable-next-line no-use-before-define
		return new JQBindEnv( this, this.io, `${name}/${arity}`, fn );
	}

	// Path-mode stubs — implemented when path/1 is ported
	public enterPathMode(): never {
		throw new JQError( 'unimplemented: path mode' );
	}

	public static getStdEnv(): JQEnv {
		// eslint-disable-next-line no-use-before-define
		return new JQBaseEnv( new IOContext() );
	}
}

class JQBindEnv extends JQEnv {
	public constructor(
		parent: JQEnv,
		io: IOContext,
		private readonly key: string,
		private readonly fn: Binding,
	) {
		super( parent, io );
	}

	public lookup( name: string, arity: number ): Binding | null {
		return `${name}/${arity}` === this.key ? this.fn : super.lookup( name, arity );
	}
}

export class JQBaseEnv extends JQEnv {
	public constructor( io: IOContext ) {
		super( null, io );
	}
}
