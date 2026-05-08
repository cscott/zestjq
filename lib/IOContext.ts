/**
 * I/O context for JQ evaluation.
 *
 * Holds the input stream and output callbacks (debug, stderr) used by
 * I/O builtins such as input/0, inputs/0, debug/0, and stderr/0.
 *
 * A single instance is currently shared across all JQEnv values derived
 * from a common root; future work will allow built-in definitions to be
 * evaluated with a empty IOContext (since built-ins should not require
 * user interaction during initialization) and then have the user's
 * IOContext replace this empty IOContext during user filter evaluation.
 *
 * TODO: add input stream and debug/stderr callbacks if/when those builtins
 * are ported.
 */
export class IOContext {}
