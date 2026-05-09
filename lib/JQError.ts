import { JQValue } from './internal.js';

export class JQError extends Error {
	public readonly jqValue: JQValue;
	public constructor( message: string, jqValue?: JQValue ) {
		super( message );
		this.name = new.target.name;
		this.jqValue = jqValue !== undefined ? jqValue : message;
	}
}
