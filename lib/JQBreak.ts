/** Non-local exit thrown by break/$label, caught only by the matching label/$label node. */
export class JQBreak extends Error {
	public readonly label: string;

	public constructor( label: string ) {
		super( label );
		this.name = new.target.name;
		this.label = label;
	}
}
