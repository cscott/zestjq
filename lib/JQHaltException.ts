/**
 * Thrown by halt/0 and halt_error/1 to terminate JQ execution.
 *
 * Intentionally does NOT extend JQError, so it propagates through jq
 * try/catch expressions without being caught by them.
 *
 * exitCode — process exit code (default 0)
 * message  — optional string to write to stderr before exiting;
 *            empty string means no output
 */
export class JQHaltException extends Error {
	public constructor(
		public readonly exitCode: number = 0,
		message: string = '',
	) {
		super( message );
		this.name = new.target.name;
	}
}
