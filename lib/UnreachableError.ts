export class UnreachableError extends Error {
	public constructor( message: string ) {
		super( message );
		this.name = 'UnreachableError';
	}
}

/**
 * Throw an UnreachableError with an explicit message.
 * Use in place of `throw new JQError(msg)` for code that
 * corresponds to a `LogicException` in the PHP source.
 *
 * @param {string} message
 * @return {never}
 */
export function assertNever( message: string ): never {
	throw new UnreachableError( message );
}
