export class UnreachableError extends Error {
	public constructor( message: string ) {
		super( message );
		this.name = 'UnreachableError';
	}
}

/**
 * Assert that a value is `never` (exhaustive switch check).
 * TypeScript narrows the argument to `never` when all union members
 * are handled; reaching this call at runtime is a programming error.
 *
 * @param {never} x
 * @return {never}
 */
export function assertNever( x: never ): never;

/**
 * Throw an UnreachableError with an explicit message.
 * Use in place of `throw new JQError(msg)` for code that
 * corresponds to a `LogicException` in the PHP source.
 *
 * @param {string} message
 * @return {never}
 */
// eslint-disable-next-line @typescript-eslint/unified-signatures
export function assertNever( message: string ): never;

export function assertNever( x: string ): never {
	throw new UnreachableError( x );
}
