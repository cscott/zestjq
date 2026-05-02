<?php
declare( strict_types = 1 );

namespace Wikimedia\Zest;

// Generated file — do not edit directly. Regenerate with: composer build-stdenv

/**
 * Pre-parsed AST of src/builtin.jq for fast bootstrapping.
 *
 * @internal
 */
class JQBuiltin {
	public const AST = [
  'type' => 'def',
  'name' => 'halt_error',
  'params' =>
	[
	],
  'body' =>
	[
	'type' => 'call',
	'name' => 'halt_error',
	'args' =>
	[
	  0 =>
	  [
		'type' => 'literal',
		'value' => 5,
	  ],
	],
	],
  'rest' =>
	[
	'type' => 'def',
	'name' => 'error',
	'params' =>
	[
	  0 =>
	  [
		'kind' => 'filter',
		'name' => 'msg',
	  ],
	],
	'body' =>
	[
	  'type' => 'pipe',
	  'left' =>
	  [
		'type' => 'call',
		'name' => 'msg',
		'args' =>
		[
		],
	  ],
	  'right' =>
	  [
		'type' => 'call',
		'name' => 'error',
		'args' =>
		[
		],
	  ],
	],
	'rest' =>
	[
	  'type' => 'def',
	  'name' => 'map',
	  'params' =>
	  [
		0 =>
		[
		  'kind' => 'filter',
		  'name' => 'f',
		],
	  ],
	  'body' =>
	  [
		'type' => 'array',
		'expr' =>
		[
		  'type' => 'pipe',
		  'left' =>
		  [
			'type' => 'iter',
			'opt' => false,
			'expr' =>
			[
			  'type' => 'identity',
			],
		  ],
		  'right' =>
		  [
			'type' => 'call',
			'name' => 'f',
			'args' =>
			[
			],
		  ],
		],
	  ],
	  'rest' =>
	  [
		'type' => 'def',
		'name' => 'select',
		'params' =>
		[
		  0 =>
		  [
			'kind' => 'filter',
			'name' => 'f',
		  ],
		],
		'body' =>
		[
		  'type' => 'if',
		  'cond' =>
		  [
			'type' => 'call',
			'name' => 'f',
			'args' =>
			[
			],
		  ],
		  'then' =>
		  [
			'type' => 'identity',
		  ],
		  'else' =>
		  [
			'type' => 'call',
			'name' => 'empty',
			'args' =>
			[
			],
		  ],
		],
		'rest' =>
		[
		  'type' => 'def',
		  'name' => 'sort_by',
		  'params' =>
		  [
			0 =>
			[
			  'kind' => 'filter',
			  'name' => 'f',
			],
		  ],
		  'body' =>
		  [
			'type' => 'call',
			'name' => '_sort_by_impl',
			'args' =>
			[
			  0 =>
			  [
				'type' => 'call',
				'name' => 'map',
				'args' =>
				[
				  0 =>
				  [
					'type' => 'array',
					'expr' =>
					[
					  'type' => 'call',
					  'name' => 'f',
					  'args' =>
					  [
					  ],
					],
				  ],
				],
			  ],
			],
		  ],
		  'rest' =>
		  [
			'type' => 'def',
			'name' => 'group_by',
			'params' =>
			[
			  0 =>
			  [
				'kind' => 'filter',
				'name' => 'f',
			  ],
			],
			'body' =>
			[
			  'type' => 'call',
			  'name' => '_group_by_impl',
			  'args' =>
			  [
				0 =>
				[
				  'type' => 'call',
				  'name' => 'map',
				  'args' =>
				  [
					0 =>
					[
					  'type' => 'array',
					  'expr' =>
					  [
						'type' => 'call',
						'name' => 'f',
						'args' =>
						[
						],
					  ],
					],
				  ],
				],
			  ],
			],
			'rest' =>
			[
			  'type' => 'def',
			  'name' => 'unique_by',
			  'params' =>
			  [
				0 =>
				[
				  'kind' => 'filter',
				  'name' => 'f',
				],
			  ],
			  'body' =>
			  [
				'type' => 'call',
				'name' => '_unique_by_impl',
				'args' =>
				[
				  0 =>
				  [
					'type' => 'call',
					'name' => 'map',
					'args' =>
					[
					  0 =>
					  [
						'type' => 'array',
						'expr' =>
						[
						  'type' => 'call',
						  'name' => 'f',
						  'args' =>
						  [
						  ],
						],
					  ],
					],
				  ],
				],
			  ],
			  'rest' =>
			  [
				'type' => 'def',
				'name' => 'max_by',
				'params' =>
				[
				  0 =>
				  [
					'kind' => 'filter',
					'name' => 'f',
				  ],
				],
				'body' =>
				[
				  'type' => 'call',
				  'name' => '_max_by_impl',
				  'args' =>
				  [
					0 =>
					[
					  'type' => 'call',
					  'name' => 'map',
					  'args' =>
					  [
						0 =>
						[
						  'type' => 'array',
						  'expr' =>
						  [
							'type' => 'call',
							'name' => 'f',
							'args' =>
							[
							],
						  ],
						],
					  ],
					],
				  ],
				],
				'rest' =>
				[
				  'type' => 'def',
				  'name' => 'min_by',
				  'params' =>
				  [
					0 =>
					[
					  'kind' => 'filter',
					  'name' => 'f',
					],
				  ],
				  'body' =>
				  [
					'type' => 'call',
					'name' => '_min_by_impl',
					'args' =>
					[
					  0 =>
					  [
						'type' => 'call',
						'name' => 'map',
						'args' =>
						[
						  0 =>
						  [
							'type' => 'array',
							'expr' =>
							[
							  'type' => 'call',
							  'name' => 'f',
							  'args' =>
							  [
							  ],
							],
						  ],
						],
					  ],
					],
				  ],
				  'rest' =>
				  [
					'type' => 'def',
					'name' => 'add',
					'params' =>
					[
					  0 =>
					  [
						'kind' => 'filter',
						'name' => 'f',
					  ],
					],
					'body' =>
					[
					  'type' => 'reduce',
					  'src' =>
					  [
						'type' => 'call',
						'name' => 'f',
						'args' =>
						[
						],
					  ],
					  'pattern' =>
					  [
						'type' => 'var_pattern',
						'name' => 'x',
					  ],
					  'init' =>
					  [
						'type' => 'literal',
						'value' => null,
					  ],
					  'update' =>
					  [
						'type' => 'binop',
						'op' => '+',
						'left' =>
						[
						  'type' => 'identity',
						],
						'right' =>
						[
						  'type' => 'variable',
						  'name' => 'x',
						],
					  ],
					],
					'rest' =>
					[
					  'type' => 'def',
					  'name' => 'add',
					  'params' =>
					  [
					  ],
					  'body' =>
					  [
						'type' => 'call',
						'name' => 'add',
						'args' =>
						[
						  0 =>
						  [
							'type' => 'iter',
							'opt' => false,
							'expr' =>
							[
							  'type' => 'identity',
							],
						  ],
						],
					  ],
					  'rest' =>
					  [
						'type' => 'def',
						'name' => 'del',
						'params' =>
						[
						  0 =>
						  [
							'kind' => 'filter',
							'name' => 'f',
						  ],
						],
						'body' =>
						[
						  'type' => 'call',
						  'name' => 'delpaths',
						  'args' =>
						  [
							0 =>
							[
							  'type' => 'array',
							  'expr' =>
							  [
								'type' => 'call',
								'name' => 'path',
								'args' =>
								[
								  0 =>
								  [
									'type' => 'call',
									'name' => 'f',
									'args' =>
									[
									],
								  ],
								],
							  ],
							],
						  ],
						],
						'rest' =>
						[
						  'type' => 'def',
						  'name' => 'abs',
						  'params' =>
						  [
						  ],
						  'body' =>
						  [
							'type' => 'if',
							'cond' =>
							[
							  'type' => 'compare',
							  'op' => '<',
							  'left' =>
							  [
								'type' => 'identity',
							  ],
							  'right' =>
							  [
								'type' => 'literal',
								'value' => 0,
							  ],
							],
							'then' =>
							[
							  'type' => 'neg',
							  'expr' =>
							  [
								'type' => 'identity',
							  ],
							],
							'else' =>
							[
							  'type' => 'identity',
							],
						  ],
						  'rest' =>
						  [
							'type' => 'def',
							'name' => '_assign',
							'params' =>
							[
							  0 =>
							  [
								'kind' => 'filter',
								'name' => 'paths',
							  ],
							  1 =>
							  [
								'kind' => 'value',
								'name' => 'value',
							  ],
							],
							'body' =>
							[
							  'type' => 'reduce',
							  'src' =>
							  [
								'type' => 'call',
								'name' => 'path',
								'args' =>
								[
								  0 =>
								  [
									'type' => 'call',
									'name' => 'paths',
									'args' =>
									[
									],
								  ],
								],
							  ],
							  'pattern' =>
							  [
								'type' => 'var_pattern',
								'name' => 'p',
							  ],
							  'init' =>
							  [
								'type' => 'identity',
							  ],
							  'update' =>
							  [
								'type' => 'call',
								'name' => 'setpath',
								'args' =>
								[
								  0 =>
								  [
									'type' => 'variable',
									'name' => 'p',
								  ],
								  1 =>
								  [
									'type' => 'variable',
									'name' => 'value',
								  ],
								],
							  ],
							],
							'rest' =>
							[
							  'type' => 'def',
							  'name' => 'map_values',
							  'params' =>
							  [
								0 =>
								[
								  'kind' => 'filter',
								  'name' => 'f',
								],
							  ],
							  'body' =>
							  [
								'type' => 'assign',
								'op' => '|=',
								'left' =>
								[
								  'type' => 'iter',
								  'opt' => false,
								  'expr' =>
								  [
									'type' => 'identity',
								  ],
								],
								'right' =>
								[
								  'type' => 'call',
								  'name' => 'f',
								  'args' =>
								  [
								  ],
								],
							  ],
							  'rest' =>
							  [
								'type' => 'def',
								'name' => 'recurse',
								'params' =>
								[
								  0 =>
								  [
									'kind' => 'filter',
									'name' => 'f',
								  ],
								],
								'body' =>
								[
								  'type' => 'def',
								  'name' => 'r',
								  'params' =>
								  [
								  ],
								  'body' =>
								  [
									'type' => 'comma',
									'left' =>
									[
									  'type' => 'identity',
									],
									'right' =>
									[
									  'type' => 'pipe',
									  'left' =>
									  [
										'type' => 'call',
										'name' => 'f',
										'args' =>
										[
										],
									  ],
									  'right' =>
									  [
										'type' => 'call',
										'name' => 'r',
										'args' =>
										[
										],
									  ],
									],
								  ],
								  'rest' =>
								  [
									'type' => 'call',
									'name' => 'r',
									'args' =>
									[
									],
								  ],
								],
								'rest' =>
								[
								  'type' => 'def',
								  'name' => 'recurse',
								  'params' =>
								  [
									0 =>
									[
									  'kind' => 'filter',
									  'name' => 'f',
									],
									1 =>
									[
									  'kind' => 'filter',
									  'name' => 'cond',
									],
								  ],
								  'body' =>
								  [
									'type' => 'def',
									'name' => 'r',
									'params' =>
									[
									],
									'body' =>
									[
									  'type' => 'comma',
									  'left' =>
									  [
										'type' => 'identity',
									  ],
									  'right' =>
									  [
										'type' => 'pipe',
										'left' =>
										[
										  'type' => 'call',
										  'name' => 'f',
										  'args' =>
										  [
										  ],
										],
										'right' =>
										[
										  'type' => 'pipe',
										  'left' =>
										  [
											'type' => 'call',
											'name' => 'select',
											'args' =>
											[
											  0 =>
											  [
												'type' => 'call',
												'name' => 'cond',
												'args' =>
												[
												],
											  ],
											],
										  ],
										  'right' =>
										  [
											'type' => 'call',
											'name' => 'r',
											'args' =>
											[
											],
										  ],
										],
									  ],
									],
									'rest' =>
									[
									  'type' => 'call',
									  'name' => 'r',
									  'args' =>
									  [
									  ],
									],
								  ],
								  'rest' =>
								  [
									'type' => 'def',
									'name' => 'recurse',
									'params' =>
									[
									],
									'body' =>
									[
									  'type' => 'call',
									  'name' => 'recurse',
									  'args' =>
									  [
										0 =>
										[
										  'type' => 'iter',
										  'opt' => true,
										  'expr' =>
										  [
											'type' => 'identity',
										  ],
										],
									  ],
									],
									'rest' =>
									[
									  'type' => 'def',
									  'name' => 'to_entries',
									  'params' =>
									  [
									  ],
									  'body' =>
									  [
										'type' => 'array',
										'expr' =>
										[
										  'type' => 'bind',
										  'expr' =>
										  [
											'type' => 'iter',
											'opt' => false,
											'expr' =>
											[
											  'type' => 'call',
											  'name' => 'keys_unsorted',
											  'args' =>
											  [
											  ],
											],
										  ],
										  'pattern' =>
										  [
											'type' => 'var_pattern',
											'name' => 'k',
										  ],
										  'body' =>
										  [
											'type' => 'object',
											'pairs' =>
											[
											  0 =>
											  [
												'key' =>
												[
												  'type' => 'literal',
												  'value' => 'key',
												],
												'value' =>
												[
												  'type' => 'variable',
												  'name' => 'k',
												],
											  ],
											  1 =>
											  [
												'key' =>
												[
												  'type' => 'literal',
												  'value' => 'value',
												],
												'value' =>
												[
												  'type' => 'index',
												  'key' =>
												  [
													'type' => 'variable',
													'name' => 'k',
												  ],
												  'opt' => false,
												  'expr' =>
												  [
													'type' => 'identity',
												  ],
												],
											  ],
											],
										  ],
										],
									  ],
									  'rest' =>
									  [
										'type' => 'def',
										'name' => 'from_entries',
										'params' =>
										[
										],
										'body' =>
										[
										  'type' => 'pipe',
										  'left' =>
										  [
											'type' => 'call',
											'name' => 'map',
											'args' =>
											[
											  0 =>
											  [
												'type' => 'object',
												'pairs' =>
												[
												  0 =>
												  [
													'key' =>
													[
													  'type' => 'alternative',
													  'left' =>
													  [
														'type' => 'field',
														'expr' =>
														[
														  'type' => 'identity',
														],
														'name' => 'key',
														'opt' => false,
													  ],
													  'right' =>
													  [
														'type' => 'alternative',
														'left' =>
														[
														  'type' => 'field',
														  'expr' =>
														  [
															'type' => 'identity',
														  ],
														  'name' => 'Key',
														  'opt' => false,
														],
														'right' =>
														[
														  'type' => 'alternative',
														  'left' =>
														  [
															'type' => 'field',
															'expr' =>
															[
															  'type' => 'identity',
															],
															'name' => 'name',
															'opt' => false,
														  ],
														  'right' =>
														  [
															'type' => 'field',
															'expr' =>
															[
															  'type' => 'identity',
															],
															'name' => 'Name',
															'opt' => false,
														  ],
														],
													  ],
													],
													'value' =>
													[
													  'type' => 'if',
													  'cond' =>
													  [
														'type' => 'call',
														'name' => 'has',
														'args' =>
														[
														  0 =>
														  [
															'type' => 'literal',
															'value' => 'value',
														  ],
														],
													  ],
													  'then' =>
													  [
														'type' => 'field',
														'expr' =>
														[
														  'type' => 'identity',
														],
														'name' => 'value',
														'opt' => false,
													  ],
													  'else' =>
													  [
														'type' => 'field',
														'expr' =>
														[
														  'type' => 'identity',
														],
														'name' => 'Value',
														'opt' => false,
													  ],
													],
												  ],
												],
											  ],
											],
										  ],
										  'right' =>
										  [
											'type' => 'alternative',
											'left' =>
											[
											  'type' => 'call',
											  'name' => 'add',
											  'args' =>
											  [
											  ],
											],
											'right' =>
											[
											  'type' => 'object',
											  'pairs' =>
											  [
											  ],
											],
										  ],
										],
										'rest' =>
										[
										  'type' => 'def',
										  'name' => 'with_entries',
										  'params' =>
										  [
											0 =>
											[
											  'kind' => 'filter',
											  'name' => 'f',
											],
										  ],
										  'body' =>
										  [
											'type' => 'pipe',
											'left' =>
											[
											  'type' => 'call',
											  'name' => 'to_entries',
											  'args' =>
											  [
											  ],
											],
											'right' =>
											[
											  'type' => 'pipe',
											  'left' =>
											  [
												'type' => 'call',
												'name' => 'map',
												'args' =>
												[
												  0 =>
												  [
													'type' => 'call',
													'name' => 'f',
													'args' =>
													[
													],
												  ],
												],
											  ],
											  'right' =>
											  [
												'type' => 'call',
												'name' => 'from_entries',
												'args' =>
												[
												],
											  ],
											],
										  ],
										  'rest' =>
										  [
											'type' => 'def',
											'name' => 'reverse',
											'params' =>
											[
											],
											'body' =>
											[
											  'type' => 'array',
											  'expr' =>
											  [
												'type' => 'index',
												'key' =>
												[
												  'type' => 'binop',
												  'op' => '-',
												  'left' =>
												  [
													'type' => 'binop',
													'op' => '-',
													'left' =>
													[
													  'type' => 'call',
													  'name' => 'length',
													  'args' =>
													  [
													  ],
													],
													'right' =>
													[
													  'type' => 'literal',
													  'value' => 1,
													],
												  ],
												  'right' =>
												  [
													'type' => 'call',
													'name' => 'range',
													'args' =>
													[
													  0 =>
													  [
														'type' => 'literal',
														'value' => 0,
													  ],
													  1 =>
													  [
														'type' => 'call',
														'name' => 'length',
														'args' =>
														[
														],
													  ],
													],
												  ],
												],
												'opt' => false,
												'expr' =>
												[
												  'type' => 'identity',
												],
											  ],
											],
											'rest' =>
											[
											  'type' => 'def',
											  'name' => 'indices',
											  'params' =>
											  [
												0 =>
												[
												  'kind' => 'value',
												  'name' => 'i',
												],
											  ],
											  'body' =>
											  [
												'type' => 'if',
												'cond' =>
												[
												  'type' => 'and',
												  'left' =>
												  [
													'type' => 'compare',
													'op' => '==',
													'left' =>
													[
													  'type' => 'call',
													  'name' => 'type',
													  'args' =>
													  [
													  ],
													],
													'right' =>
													[
													  'type' => 'literal',
													  'value' => 'array',
													],
												  ],
												  'right' =>
												  [
													'type' => 'compare',
													'op' => '==',
													'left' =>
													[
													  'type' => 'pipe',
													  'left' =>
													  [
														'type' => 'variable',
														'name' => 'i',
													  ],
													  'right' =>
													  [
														'type' => 'call',
														'name' => 'type',
														'args' =>
														[
														],
													  ],
													],
													'right' =>
													[
													  'type' => 'literal',
													  'value' => 'array',
													],
												  ],
												],
												'then' =>
												[
												  'type' => 'index',
												  'key' =>
												  [
													'type' => 'variable',
													'name' => 'i',
												  ],
												  'opt' => false,
												  'expr' =>
												  [
													'type' => 'identity',
												  ],
												],
												'else' =>
												[
												  'type' => 'if',
												  'cond' =>
												  [
													'type' => 'compare',
													'op' => '==',
													'left' =>
													[
													  'type' => 'call',
													  'name' => 'type',
													  'args' =>
													  [
													  ],
													],
													'right' =>
													[
													  'type' => 'literal',
													  'value' => 'array',
													],
												  ],
												  'then' =>
												  [
													'type' => 'index',
													'key' =>
													[
													  'type' => 'array',
													  'expr' =>
													  [
														'type' => 'variable',
														'name' => 'i',
													  ],
													],
													'opt' => false,
													'expr' =>
													[
													  'type' => 'identity',
													],
												  ],
												  'else' =>
												  [
													'type' => 'if',
													'cond' =>
													[
													  'type' => 'and',
													  'left' =>
													  [
														'type' => 'compare',
														'op' => '==',
														'left' =>
														[
														  'type' => 'call',
														  'name' => 'type',
														  'args' =>
														  [
														  ],
														],
														'right' =>
														[
														  'type' => 'literal',
														  'value' => 'string',
														],
													  ],
													  'right' =>
													  [
														'type' => 'compare',
														'op' => '==',
														'left' =>
														[
														  'type' => 'pipe',
														  'left' =>
														  [
															'type' => 'variable',
															'name' => 'i',
														  ],
														  'right' =>
														  [
															'type' => 'call',
															'name' => 'type',
															'args' =>
															[
															],
														  ],
														],
														'right' =>
														[
														  'type' => 'literal',
														  'value' => 'string',
														],
													  ],
													],
													'then' =>
													[
													  'type' => 'call',
													  'name' => '_strindices',
													  'args' =>
													  [
														0 =>
														[
														  'type' => 'variable',
														  'name' => 'i',
														],
													  ],
													],
													'else' =>
													[
													  'type' => 'index',
													  'key' =>
													  [
														'type' => 'variable',
														'name' => 'i',
													  ],
													  'opt' => false,
													  'expr' =>
													  [
														'type' => 'identity',
													  ],
													],
												  ],
												],
											  ],
											  'rest' =>
											  [
												'type' => 'def',
												'name' => 'index',
												'params' =>
												[
												  0 =>
												  [
													'kind' => 'value',
													'name' => 'i',
												  ],
												],
												'body' =>
												[
												  'type' => 'pipe',
												  'left' =>
												  [
													'type' => 'call',
													'name' => 'indices',
													'args' =>
													[
													  0 =>
													  [
														'type' => 'variable',
														'name' => 'i',
													  ],
													],
												  ],
												  'right' =>
												  [
													'type' => 'index',
													'key' =>
													[
													  'type' => 'literal',
													  'value' => 0,
													],
													'opt' => false,
													'expr' =>
													[
													  'type' => 'identity',
													],
												  ],
												],
												'rest' =>
												[
												  'type' => 'def',
												  'name' => 'rindex',
												  'params' =>
												  [
													0 =>
													[
													  'kind' => 'value',
													  'name' => 'i',
													],
												  ],
												  'body' =>
												  [
													'type' => 'pipe',
													'left' =>
													[
													  'type' => 'call',
													  'name' => 'indices',
													  'args' =>
													  [
														0 =>
														[
														  'type' => 'variable',
														  'name' => 'i',
														],
													  ],
													],
													'right' =>
													[
													  'type' => 'index',
													  'key' =>
													  [
														'type' => 'literal',
														'value' => 0,
													  ],
													  'opt' => false,
													  'expr' =>
													  [
														'type' => 'slice',
														'from' =>
														[
														  'type' => 'neg',
														  'expr' =>
														  [
															'type' => 'literal',
															'value' => 1,
														  ],
														],
														'to' => null,
														'opt' => false,
														'expr' =>
														[
														  'type' => 'identity',
														],
													  ],
													],
												  ],
												  'rest' =>
												  [
													'type' => 'def',
													'name' => 'paths',
													'params' =>
													[
													],
													'body' =>
													[
													  'type' => 'pipe',
													  'left' =>
													  [
														'type' => 'call',
														'name' => 'path',
														'args' =>
														[
														  0 =>
														  [
															'type' => 'call',
															'name' => 'recurse',
															'args' =>
															[
															],
														  ],
														],
													  ],
													  'right' =>
													  [
														'type' => 'call',
														'name' => 'select',
														'args' =>
														[
														  0 =>
														  [
															'type' => 'compare',
															'op' => '>',
															'left' =>
															[
															  'type' => 'call',
															  'name' => 'length',
															  'args' =>
															  [
															  ],
															],
															'right' =>
															[
															  'type' => 'literal',
															  'value' => 0,
															],
														  ],
														],
													  ],
													],
													'rest' =>
													[
													  'type' => 'def',
													  'name' => 'paths',
													  'params' =>
													  [
														0 =>
														[
														  'kind' => 'filter',
														  'name' => 'node_filter',
														],
													  ],
													  'body' =>
													  [
														'type' => 'pipe',
														'left' =>
														[
														  'type' => 'call',
														  'name' => 'path',
														  'args' =>
														  [
															0 =>
															[
															  'type' => 'pipe',
															  'left' =>
															  [
																'type' => 'call',
																'name' => 'recurse',
																'args' =>
																[
																],
															  ],
															  'right' =>
															  [
																'type' => 'call',
																'name' => 'select',
																'args' =>
																[
																  0 =>
																  [
																	'type' => 'call',
																	'name' => 'node_filter',
																	'args' =>
																	[
																	],
																  ],
																],
															  ],
															],
														  ],
														],
														'right' =>
														[
														  'type' => 'call',
														  'name' => 'select',
														  'args' =>
														  [
															0 =>
															[
															  'type' => 'compare',
															  'op' => '>',
															  'left' =>
															  [
																'type' => 'call',
																'name' => 'length',
																'args' =>
																[
																],
															  ],
															  'right' =>
															  [
																'type' => 'literal',
																'value' => 0,
															  ],
															],
														  ],
														],
													  ],
													  'rest' =>
													  [
														'type' => 'def',
														'name' => 'isfinite',
														'params' =>
														[
														],
														'body' =>
														[
														  'type' => 'and',
														  'left' =>
														  [
															'type' => 'compare',
															'op' => '==',
															'left' =>
															[
															  'type' => 'call',
															  'name' => 'type',
															  'args' =>
															  [
															  ],
															],
															'right' =>
															[
															  'type' => 'literal',
															  'value' => 'number',
															],
														  ],
														  'right' =>
														  [
															'type' => 'pipe',
															'left' =>
															[
															  'type' => 'call',
															  'name' => 'isinfinite',
															  'args' =>
															  [
															  ],
															],
															'right' =>
															[
															  'type' => 'call',
															  'name' => 'not',
															  'args' =>
															  [
															  ],
															],
														  ],
														],
														'rest' =>
														[
														  'type' => 'def',
														  'name' => 'arrays',
														  'params' =>
														  [
														  ],
														  'body' =>
														  [
															'type' => 'call',
															'name' => 'select',
															'args' =>
															[
															  0 =>
															  [
																'type' => 'compare',
																'op' => '==',
																'left' =>
																[
																  'type' => 'call',
																  'name' => 'type',
																  'args' =>
																  [
																  ],
																],
																'right' =>
																[
																  'type' => 'literal',
																  'value' => 'array',
																],
															  ],
															],
														  ],
														  'rest' =>
														  [
															'type' => 'def',
															'name' => 'objects',
															'params' =>
															[
															],
															'body' =>
															[
															  'type' => 'call',
															  'name' => 'select',
															  'args' =>
															  [
																0 =>
																[
																  'type' => 'compare',
																  'op' => '==',
																  'left' =>
																  [
																	'type' => 'call',
																	'name' => 'type',
																	'args' =>
																	[
																	],
																  ],
																  'right' =>
																  [
																	'type' => 'literal',
																	'value' => 'object',
																  ],
																],
															  ],
															],
															'rest' =>
															[
															  'type' => 'def',
															  'name' => 'iterables',
															  'params' =>
															  [
															  ],
															  'body' =>
															  [
																'type' => 'call',
																'name' => 'select',
																'args' =>
																[
																  0 =>
																  [
																	'type' => 'pipe',
																	'left' =>
																	[
																	  'type' => 'call',
																	  'name' => 'type',
																	  'args' =>
																	  [
																	  ],
																	],
																	'right' =>
																	[
																	  'type' => 'or',
																	  'left' =>
																	  [
																		'type' => 'compare',
																		'op' => '==',
																		'left' =>
																		[
																		  'type' => 'identity',
																		],
																		'right' =>
																		[
																		  'type' => 'literal',
																		  'value' => 'array',
																		],
																	  ],
																	  'right' =>
																	  [
																		'type' => 'compare',
																		'op' => '==',
																		'left' =>
																		[
																		  'type' => 'identity',
																		],
																		'right' =>
																		[
																		  'type' => 'literal',
																		  'value' => 'object',
																		],
																	  ],
																	],
																  ],
																],
															  ],
															  'rest' =>
															  [
																'type' => 'def',
																'name' => 'booleans',
																'params' =>
																[
																],
																'body' =>
																[
																  'type' => 'call',
																  'name' => 'select',
																  'args' =>
																  [
																	0 =>
																	[
																	  'type' => 'compare',
																	  'op' => '==',
																	  'left' =>
																	  [
																		'type' => 'call',
																		'name' => 'type',
																		'args' =>
																		[
																		],
																	  ],
																	  'right' =>
																	  [
																		'type' => 'literal',
																		'value' => 'boolean',
																	  ],
																	],
																  ],
																],
																'rest' =>
																[
																  'type' => 'def',
																  'name' => 'numbers',
																  'params' =>
																  [
																  ],
																  'body' =>
																  [
																	'type' => 'call',
																	'name' => 'select',
																	'args' =>
																	[
																	  0 =>
																	  [
																		'type' => 'compare',
																		'op' => '==',
																		'left' =>
																		[
																		  'type' => 'call',
																		  'name' => 'type',
																		  'args' =>
																		  [
																		  ],
																		],
																		'right' =>
																		[
																		  'type' => 'literal',
																		  'value' => 'number',
																		],
																	  ],
																	],
																  ],
																  'rest' =>
																  [
																	'type' => 'def',
																	'name' => 'normals',
																	'params' =>
																	[
																	],
																	'body' =>
																	[
																	  'type' => 'call',
																	  'name' => 'select',
																	  'args' =>
																	  [
																		0 =>
																		[
																		  'type' => 'call',
																		  'name' => 'isnormal',
																		  'args' =>
																		  [
																		  ],
																		],
																	  ],
																	],
																	'rest' =>
																	[
																	  'type' => 'def',
																	  'name' => 'finites',
																	  'params' =>
																	  [
																	  ],
																	  'body' =>
																	  [
																		'type' => 'call',
																		'name' => 'select',
																		'args' =>
																		[
																		  0 =>
																		  [
																			'type' => 'call',
																			'name' => 'isfinite',
																			'args' =>
																			[
																			],
																		  ],
																		],
																	  ],
																	  'rest' =>
																	  [
																		'type' => 'def',
																		'name' => 'strings',
																		'params' =>
																		[
																		],
																		'body' =>
																		[
																		  'type' => 'call',
																		  'name' => 'select',
																		  'args' =>
																		  [
																			0 =>
																			[
																			  'type' => 'compare',
																			  'op' => '==',
																			  'left' =>
																			  [
																				'type' => 'call',
																				'name' => 'type',
																				'args' =>
																				[
																				],
																			  ],
																			  'right' =>
																			  [
																				'type' => 'literal',
																				'value' => 'string',
																			  ],
																			],
																		  ],
																		],
																		'rest' =>
																		[
																		  'type' => 'def',
																		  'name' => 'nulls',
																		  'params' =>
																		  [
																		  ],
																		  'body' =>
																		  [
																			'type' => 'call',
																			'name' => 'select',
																			'args' =>
																			[
																			  0 =>
																			  [
																				'type' => 'compare',
																				'op' => '==',
																				'left' =>
																				[
																				  'type' => 'identity',
																				],
																				'right' =>
																				[
																				  'type' => 'literal',
																				  'value' => null,
																				],
																			  ],
																			],
																		  ],
																		  'rest' =>
																		  [
																			'type' => 'def',
																			'name' => 'values',
																			'params' =>
																			[
																			],
																			'body' =>
																			[
																			  'type' => 'call',
																			  'name' => 'select',
																			  'args' =>
																			  [
																				0 =>
																				[
																				  'type' => 'compare',
																				  'op' => '!=',
																				  'left' =>
																				  [
																					'type' => 'identity',
																				  ],
																				  'right' =>
																				  [
																					'type' => 'literal',
																					'value' => null,
																				  ],
																				],
																			  ],
																			],
																			'rest' =>
																			[
																			  'type' => 'def',
																			  'name' => 'scalars',
																			  'params' =>
																			  [
																			  ],
																			  'body' =>
																			  [
																				'type' => 'call',
																				'name' => 'select',
																				'args' =>
																				[
																				  0 =>
																				  [
																					'type' => 'pipe',
																					'left' =>
																					[
																					  'type' => 'call',
																					  'name' => 'type',
																					  'args' =>
																					  [
																					  ],
																					],
																					'right' =>
																					[
																					  'type' => 'and',
																					  'left' =>
																					  [
																						'type' => 'compare',
																						'op' => '!=',
																						'left' =>
																						[
																						  'type' => 'identity',
																						],
																						'right' =>
																						[
																						  'type' => 'literal',
																						  'value' => 'array',
																						],
																					  ],
																					  'right' =>
																					  [
																						'type' => 'compare',
																						'op' => '!=',
																						'left' =>
																						[
																						  'type' => 'identity',
																						],
																						'right' =>
																						[
																						  'type' => 'literal',
																						  'value' => 'object',
																						],
																					  ],
																					],
																				  ],
																				],
																			  ],
																			  'rest' =>
																			  [
																				'type' => 'def',
																				'name' => 'join',
																				'params' =>
																				[
																				  0 =>
																				  [
																					'kind' => 'value',
																					'name' => 'x',
																				  ],
																				],
																				'body' =>
																				[
																				  'type' => 'alternative',
																				  'left' =>
																				  [
																					'type' => 'reduce',
																					'src' =>
																					[
																					  'type' => 'iter',
																					  'opt' => false,
																					  'expr' =>
																					  [
																						'type' => 'identity',
																					  ],
																					],
																					'pattern' =>
																					[
																					  'type' => 'var_pattern',
																					  'name' => 'i',
																					],
																					'init' =>
																					[
																					  'type' => 'literal',
																					  'value' => null,
																					],
																					'update' =>
																					[
																					  'type' => 'binop',
																					  'op' => '+',
																					  'left' =>
																					  [
																						'type' => 'if',
																						'cond' =>
																						[
																						  'type' => 'compare',
																						  'op' => '==',
																						  'left' =>
																						  [
																							'type' => 'identity',
																						  ],
																						  'right' =>
																						  [
																							'type' => 'literal',
																							'value' => null,
																						  ],
																						],
																						'then' =>
																						[
																						  'type' => 'string',
																						  'fmt' => null,
																						  'parts' =>
																						  [
																						  ],
																						],
																						'else' =>
																						[
																						  'type' => 'binop',
																						  'op' => '+',
																						  'left' =>
																						  [
																							'type' => 'identity',
																						  ],
																						  'right' =>
																						  [
																							'type' => 'variable',
																							'name' => 'x',
																						  ],
																						],
																					  ],
																					  'right' =>
																					  [
																						'type' => 'pipe',
																						'left' =>
																						[
																						  'type' => 'variable',
																						  'name' => 'i',
																						],
																						'right' =>
																						[
																						  'type' => 'if',
																						  'cond' =>
																						  [
																							'type' => 'or',
																							'left' =>
																							[
																							  'type' => 'compare',
																							  'op' => '==',
																							  'left' =>
																							  [
																								'type' => 'call',
																								'name' => 'type',
																								'args' =>
																								[
																								],
																							  ],
																							  'right' =>
																							  [
																								'type' => 'literal',
																								'value' => 'boolean',
																							  ],
																							],
																							'right' =>
																							[
																							  'type' => 'compare',
																							  'op' => '==',
																							  'left' =>
																							  [
																								'type' => 'call',
																								'name' => 'type',
																								'args' =>
																								[
																								],
																							  ],
																							  'right' =>
																							  [
																								'type' => 'literal',
																								'value' => 'number',
																							  ],
																							],
																						  ],
																						  'then' =>
																						  [
																							'type' => 'call',
																							'name' => 'tostring',
																							'args' =>
																							[
																							],
																						  ],
																						  'else' =>
																						  [
																							'type' => 'alternative',
																							'left' =>
																							[
																							  'type' => 'identity',
																							],
																							'right' =>
																							[
																							  'type' => 'string',
																							  'fmt' => null,
																							  'parts' =>
																							  [
																							  ],
																							],
																						  ],
																						],
																					  ],
																					],
																				  ],
																				  'right' =>
																				  [
																					'type' => 'string',
																					'fmt' => null,
																					'parts' =>
																					[
																					],
																				  ],
																				],
																				'rest' =>
																				[
																				  'type' => 'def',
																				  'name' => '_flatten',
																				  'params' =>
																				  [
																					0 =>
																					[
																					  'kind' => 'value',
																					  'name' => 'x',
																					],
																				  ],
																				  'body' =>
																				  [
																					'type' => 'reduce',
																					'src' =>
																					[
																					  'type' => 'iter',
																					  'opt' => false,
																					  'expr' =>
																					  [
																						'type' => 'identity',
																					  ],
																					],
																					'pattern' =>
																					[
																					  'type' => 'var_pattern',
																					  'name' => 'i',
																					],
																					'init' =>
																					[
																					  'type' => 'array',
																					  'expr' => null,
																					],
																					'update' =>
																					[
																					  'type' => 'if',
																					  'cond' =>
																					  [
																						'type' => 'pipe',
																						'left' =>
																						[
																						  'type' => 'variable',
																						  'name' => 'i',
																						],
																						'right' =>
																						[
																						  'type' => 'and',
																						  'left' =>
																						  [
																							'type' => 'compare',
																							'op' => '==',
																							'left' =>
																							[
																							  'type' => 'call',
																							  'name' => 'type',
																							  'args' =>
																							  [
																							  ],
																							],
																							'right' =>
																							[
																							  'type' => 'literal',
																							  'value' => 'array',
																							],
																						  ],
																						  'right' =>
																						  [
																							'type' => 'compare',
																							'op' => '!=',
																							'left' =>
																							[
																							  'type' => 'variable',
																							  'name' => 'x',
																							],
																							'right' =>
																							[
																							  'type' => 'literal',
																							  'value' => 0,
																							],
																						  ],
																						],
																					  ],
																					  'then' =>
																					  [
																						'type' => 'binop',
																						'op' => '+',
																						'left' =>
																						[
																						  'type' => 'identity',
																						],
																						'right' =>
																						[
																						  'type' => 'pipe',
																						  'left' =>
																						  [
																							'type' => 'variable',
																							'name' => 'i',
																						  ],
																						  'right' =>
																						  [
																							'type' => 'call',
																							'name' => '_flatten',
																							'args' =>
																							[
																							  0 =>
																							  [
																								'type' => 'binop',
																								'op' => '-',
																								'left' =>
																								[
																								  'type' => 'variable',
																								  'name' => 'x',
																								],
																								'right' =>
																								[
																								  'type' => 'literal',
																								  'value' => 1,
																								],
																							  ],
																							],
																						  ],
																						],
																					  ],
																					  'else' =>
																					  [
																						'type' => 'binop',
																						'op' => '+',
																						'left' =>
																						[
																						  'type' => 'identity',
																						],
																						'right' =>
																						[
																						  'type' => 'array',
																						  'expr' =>
																						  [
																							'type' => 'variable',
																							'name' => 'i',
																						  ],
																						],
																					  ],
																					],
																				  ],
																				  'rest' =>
																				  [
																					'type' => 'def',
																					'name' => 'flatten',
																					'params' =>
																					[
																					  0 =>
																					  [
																						'kind' => 'value',
																						'name' => 'x',
																					  ],
																					],
																					'body' =>
																					[
																					  'type' => 'if',
																					  'cond' =>
																					  [
																						'type' => 'compare',
																						'op' => '<',
																						'left' =>
																						[
																						  'type' => 'variable',
																						  'name' => 'x',
																						],
																						'right' =>
																						[
																						  'type' => 'literal',
																						  'value' => 0,
																						],
																					  ],
																					  'then' =>
																					  [
																						'type' => 'call',
																						'name' => 'error',
																						'args' =>
																						[
																						  0 =>
																						  [
																							'type' => 'literal',
																							'value' => 'flatten depth must not be negative',
																						  ],
																						],
																					  ],
																					  'else' =>
																					  [
																						'type' => 'call',
																						'name' => '_flatten',
																						'args' =>
																						[
																						  0 =>
																						  [
																							'type' => 'variable',
																							'name' => 'x',
																						  ],
																						],
																					  ],
																					],
																					'rest' =>
																					[
																					  'type' => 'def',
																					  'name' => 'flatten',
																					  'params' =>
																					  [
																					  ],
																					  'body' =>
																					  [
																						'type' => 'call',
																						'name' => '_flatten',
																						'args' =>
																						[
																						  0 =>
																						  [
																							'type' => 'neg',
																							'expr' =>
																							[
																							  'type' => 'literal',
																							  'value' => 1,
																							],
																						  ],
																						],
																					  ],
																					  'rest' =>
																					  [
																						'type' => 'def',
																						'name' => 'range',
																						'params' =>
																						[
																						  0 =>
																						  [
																							'kind' => 'value',
																							'name' => 'x',
																						  ],
																						],
																						'body' =>
																						[
																						  'type' => 'call',
																						  'name' => 'range',
																						  'args' =>
																						  [
																							0 =>
																							[
																							  'type' => 'literal',
																							  'value' => 0,
																							],
																							1 =>
																							[
																							  'type' => 'variable',
																							  'name' => 'x',
																							],
																						  ],
																						],
																						'rest' =>
																						[
																						  'type' => 'def',
																						  'name' => 'fromdateiso8601',
																						  'params' =>
																						  [
																						  ],
																						  'body' =>
																						  [
																							'type' => 'pipe',
																							'left' =>
																							[
																							  'type' => 'call',
																							  'name' => 'strptime',
																							  'args' =>
																							  [
																								0 =>
																								[
																								  'type' => 'literal',
																								  'value' => '%Y-%m-%dT%H:%M:%SZ',
																								],
																							  ],
																							],
																							'right' =>
																							[
																							  'type' => 'call',
																							  'name' => 'mktime',
																							  'args' =>
																							  [
																							  ],
																							],
																						  ],
																						  'rest' =>
																						  [
																							'type' => 'def',
																							'name' => 'todateiso8601',
																							'params' =>
																							[
																							],
																							'body' =>
																							[
																							  'type' => 'call',
																							  'name' => 'strftime',
																							  'args' =>
																							  [
																								0 =>
																								[
																								  'type' => 'literal',
																								  'value' => '%Y-%m-%dT%H:%M:%SZ',
																								],
																							  ],
																							],
																							'rest' =>
																							[
																							  'type' => 'def',
																							  'name' => 'fromdate',
																							  'params' =>
																							  [
																							  ],
																							  'body' =>
																							  [
																								'type' => 'call',
																								'name' => 'fromdateiso8601',
																								'args' =>
																								[
																								],
																							  ],
																							  'rest' =>
																							  [
																								'type' => 'def',
																								'name' => 'todate',
																								'params' =>
																								[
																								],
																								'body' =>
																								[
																								  'type' => 'call',
																								  'name' => 'todateiso8601',
																								  'args' =>
																								  [
																								  ],
																								],
																								'rest' =>
																								[
																								  'type' => 'def',
																								  'name' => 'ltrimstr',
																								  'params' =>
																								  [
																									0 =>
																									[
																									  'kind' => 'value',
																									  'name' => 'left',
																									],
																								  ],
																								  'body' =>
																								  [
																									'type' => 'if',
																									'cond' =>
																									[
																									  'type' => 'call',
																									  'name' => 'startswith',
																									  'args' =>
																									  [
																										0 =>
																										[
																										  'type' => 'variable',
																										  'name' => 'left',
																										],
																									  ],
																									],
																									'then' =>
																									[
																									  'type' => 'slice',
																									  'from' =>
																									  [
																										'type' => 'pipe',
																										'left' =>
																										[
																										  'type' => 'variable',
																										  'name' => 'left',
																										],
																										'right' =>
																										[
																										  'type' => 'call',
																										  'name' => 'length',
																										  'args' =>
																										  [
																										  ],
																										],
																									  ],
																									  'to' => null,
																									  'opt' => false,
																									  'expr' =>
																									  [
																										'type' => 'identity',
																									  ],
																									],
																									'else' =>
																									[
																									  'type' => 'literal',
																									  'value' => null,
																									],
																								  ],
																								  'rest' =>
																								  [
																									'type' => 'def',
																									'name' => 'rtrimstr',
																									'params' =>
																									[
																									  0 =>
																									  [
																										'kind' => 'value',
																										'name' => 'right',
																									  ],
																									],
																									'body' =>
																									[
																									  'type' => 'if',
																									  'cond' =>
																									  [
																										'type' => 'call',
																										'name' => 'endswith',
																										'args' =>
																										[
																										  0 =>
																										  [
																											'type' => 'variable',
																											'name' => 'right',
																										  ],
																										],
																									  ],
																									  'then' =>
																									  [
																										'type' => 'slice',
																										'from' => null,
																										'to' =>
																										[
																										  'type' => 'binop',
																										  'op' => '-',
																										  'left' =>
																										  [
																											'type' => 'call',
																											'name' => 'length',
																											'args' =>
																											[
																											],
																										  ],
																										  'right' =>
																										  [
																											'type' => 'pipe',
																											'left' =>
																											[
																											  'type' => 'variable',
																											  'name' => 'right',
																											],
																											'right' =>
																											[
																											  'type' => 'call',
																											  'name' => 'length',
																											  'args' =>
																											  [
																											  ],
																											],
																										  ],
																										],
																										'opt' => false,
																										'expr' =>
																										[
																										  'type' => 'identity',
																										],
																									  ],
																									  'else' =>
																									  [
																										'type' => 'literal',
																										'value' => null,
																									  ],
																									],
																									'rest' =>
																									[
																									  'type' => 'def',
																									  'name' => 'trimstr',
																									  'params' =>
																									  [
																										0 =>
																										[
																										  'kind' => 'value',
																										  'name' => 'val',
																										],
																									  ],
																									  'body' =>
																									  [
																										'type' => 'pipe',
																										'left' =>
																										[
																										  'type' => 'call',
																										  'name' => 'ltrimstr',
																										  'args' =>
																										  [
																											0 =>
																											[
																											  'type' => 'variable',
																											  'name' => 'val',
																											],
																										  ],
																										],
																										'right' =>
																										[
																										  'type' => 'call',
																										  'name' => 'rtrimstr',
																										  'args' =>
																										  [
																											0 =>
																											[
																											  'type' => 'variable',
																											  'name' => 'val',
																											],
																										  ],
																										],
																									  ],
																									  'rest' =>
																									  [
																										'type' => 'def',
																										'name' => 'match',
																										'params' =>
																										[
																										  0 =>
																										  [
																											'kind' => 'filter',
																											'name' => 're',
																										  ],
																										  1 =>
																										  [
																											'kind' => 'filter',
																											'name' => 'mode',
																										  ],
																										],
																										'body' =>
																										[
																										  'type' => 'pipe',
																										  'left' =>
																										  [
																											'type' => 'call',
																											'name' => '_match_impl',
																											'args' =>
																											[
																											  0 =>
																											  [
																												'type' => 'call',
																												'name' => 're',
																												'args' =>
																												[
																												],
																											  ],
																											  1 =>
																											  [
																												'type' => 'call',
																												'name' => 'mode',
																												'args' =>
																												[
																												],
																											  ],
																											  2 =>
																											  [
																												'type' => 'literal',
																												'value' => false,
																											  ],
																											],
																										  ],
																										  'right' =>
																										  [
																											'type' => 'iter',
																											'opt' => false,
																											'expr' =>
																											[
																											  'type' => 'identity',
																											],
																										  ],
																										],
																										'rest' =>
																										[
																										  'type' => 'def',
																										  'name' => 'match',
																										  'params' =>
																										  [
																											0 =>
																											[
																											  'kind' => 'value',
																											  'name' => 'val',
																											],
																										  ],
																										  'body' =>
																										  [
																											'type' => 'bind',
																											'expr' =>
																											[
																											  'type' => 'pipe',
																											  'left' =>
																											  [
																												'type' => 'variable',
																												'name' => 'val',
																											  ],
																											  'right' =>
																											  [
																												'type' => 'call',
																												'name' => 'type',
																												'args' =>
																												[
																												],
																											  ],
																											],
																											'pattern' =>
																											[
																											  'type' => 'var_pattern',
																											  'name' => 'vt',
																											],
																											'body' =>
																											[
																											  'type' => 'if',
																											  'cond' =>
																											  [
																												'type' => 'compare',
																												'op' => '==',
																												'left' =>
																												[
																												  'type' => 'variable',
																												  'name' => 'vt',
																												],
																												'right' =>
																												[
																												  'type' => 'literal',
																												  'value' => 'string',
																												],
																											  ],
																											  'then' =>
																											  [
																												'type' => 'call',
																												'name' => 'match',
																												'args' =>
																												[
																												  0 =>
																												  [
																													'type' => 'variable',
																													'name' => 'val',
																												  ],
																												  1 =>
																												  [
																													'type' => 'literal',
																													'value' => null,
																												  ],
																												],
																											  ],
																											  'else' =>
																											  [
																												'type' => 'if',
																												'cond' =>
																												[
																												  'type' => 'and',
																												  'left' =>
																												  [
																													'type' => 'compare',
																													'op' => '==',
																													'left' =>
																													[
																													  'type' => 'variable',
																													  'name' => 'vt',
																													],
																													'right' =>
																													[
																													  'type' => 'literal',
																													  'value' => 'array',
																													],
																												  ],
																												  'right' =>
																												  [
																													'type' => 'compare',
																													'op' => '>',
																													'left' =>
																													[
																													  'type' => 'pipe',
																													  'left' =>
																													  [
																														'type' => 'variable',
																														'name' => 'val',
																													  ],
																													  'right' =>
																													  [
																														'type' => 'call',
																														'name' => 'length',
																														'args' =>
																														[
																														],
																													  ],
																													],
																													'right' =>
																													[
																													  'type' => 'literal',
																													  'value' => 1,
																													],
																												  ],
																												],
																												'then' =>
																												[
																												  'type' => 'call',
																												  'name' => 'match',
																												  'args' =>
																												  [
																													0 =>
																													[
																													  'type' => 'index',
																													  'key' =>
																													  [
																														'type' => 'literal',
																														'value' => 0,
																													  ],
																													  'opt' => false,
																													  'expr' =>
																													  [
																														'type' => 'variable',
																														'name' => 'val',
																													  ],
																													],
																													1 =>
																													[
																													  'type' => 'index',
																													  'key' =>
																													  [
																														'type' => 'literal',
																														'value' => 1,
																													  ],
																													  'opt' => false,
																													  'expr' =>
																													  [
																														'type' => 'variable',
																														'name' => 'val',
																													  ],
																													],
																												  ],
																												],
																												'else' =>
																												[
																												  'type' => 'if',
																												  'cond' =>
																												  [
																													'type' => 'and',
																													'left' =>
																													[
																													  'type' => 'compare',
																													  'op' => '==',
																													  'left' =>
																													  [
																														'type' => 'variable',
																														'name' => 'vt',
																													  ],
																													  'right' =>
																													  [
																														'type' => 'literal',
																														'value' => 'array',
																													  ],
																													],
																													'right' =>
																													[
																													  'type' => 'compare',
																													  'op' => '>',
																													  'left' =>
																													  [
																														'type' => 'pipe',
																														'left' =>
																														[
																														  'type' => 'variable',
																														  'name' => 'val',
																														],
																														'right' =>
																														[
																														  'type' => 'call',
																														  'name' => 'length',
																														  'args' =>
																														  [
																														  ],
																														],
																													  ],
																													  'right' =>
																													  [
																														'type' => 'literal',
																														'value' => 0,
																													  ],
																													],
																												  ],
																												  'then' =>
																												  [
																													'type' => 'call',
																													'name' => 'match',
																													'args' =>
																													[
																													  0 =>
																													  [
																														'type' => 'index',
																														'key' =>
																														[
																														  'type' => 'literal',
																														  'value' => 0,
																														],
																														'opt' => false,
																														'expr' =>
																														[
																														  'type' => 'variable',
																														  'name' => 'val',
																														],
																													  ],
																													  1 =>
																													  [
																														'type' => 'literal',
																														'value' => null,
																													  ],
																													],
																												  ],
																												  'else' =>
																												  [
																													'type' => 'call',
																													'name' => 'error',
																													'args' =>
																													[
																													  0 =>
																													  [
																														'type' => 'binop',
																														'op' => '+',
																														'left' =>
																														[
																														  'type' => 'variable',
																														  'name' => 'vt',
																														],
																														'right' =>
																														[
																														  'type' => 'literal',
																														  'value' => ' not a string or array',
																														],
																													  ],
																													],
																												  ],
																												],
																											  ],
																											],
																										  ],
																										  'rest' =>
																										  [
																											'type' => 'def',
																											'name' => 'test',
																											'params' =>
																											[
																											  0 =>
																											  [
																												'kind' => 'filter',
																												'name' => 're',
																											  ],
																											  1 =>
																											  [
																												'kind' => 'filter',
																												'name' => 'mode',
																											  ],
																											],
																											'body' =>
																											[
																											  'type' => 'call',
																											  'name' => '_match_impl',
																											  'args' =>
																											  [
																												0 =>
																												[
																												  'type' => 'call',
																												  'name' => 're',
																												  'args' =>
																												  [
																												  ],
																												],
																												1 =>
																												[
																												  'type' => 'call',
																												  'name' => 'mode',
																												  'args' =>
																												  [
																												  ],
																												],
																												2 =>
																												[
																												  'type' => 'literal',
																												  'value' => true,
																												],
																											  ],
																											],
																											'rest' =>
																											[
																											  'type' => 'def',
																											  'name' => 'test',
																											  'params' =>
																											  [
																												0 =>
																												[
																												  'kind' => 'value',
																												  'name' => 'val',
																												],
																											  ],
																											  'body' =>
																											  [
																												'type' => 'bind',
																												'expr' =>
																												[
																												  'type' => 'pipe',
																												  'left' =>
																												  [
																													'type' => 'variable',
																													'name' => 'val',
																												  ],
																												  'right' =>
																												  [
																													'type' => 'call',
																													'name' => 'type',
																													'args' =>
																													[
																													],
																												  ],
																												],
																												'pattern' =>
																												[
																												  'type' => 'var_pattern',
																												  'name' => 'vt',
																												],
																												'body' =>
																												[
																												  'type' => 'if',
																												  'cond' =>
																												  [
																													'type' => 'compare',
																													'op' => '==',
																													'left' =>
																													[
																													  'type' => 'variable',
																													  'name' => 'vt',
																													],
																													'right' =>
																													[
																													  'type' => 'literal',
																													  'value' => 'string',
																													],
																												  ],
																												  'then' =>
																												  [
																													'type' => 'call',
																													'name' => 'test',
																													'args' =>
																													[
																													  0 =>
																													  [
																														'type' => 'variable',
																														'name' => 'val',
																													  ],
																													  1 =>
																													  [
																														'type' => 'literal',
																														'value' => null,
																													  ],
																													],
																												  ],
																												  'else' =>
																												  [
																													'type' => 'if',
																													'cond' =>
																													[
																													  'type' => 'and',
																													  'left' =>
																													  [
																														'type' => 'compare',
																														'op' => '==',
																														'left' =>
																														[
																														  'type' => 'variable',
																														  'name' => 'vt',
																														],
																														'right' =>
																														[
																														  'type' => 'literal',
																														  'value' => 'array',
																														],
																													  ],
																													  'right' =>
																													  [
																														'type' => 'compare',
																														'op' => '>',
																														'left' =>
																														[
																														  'type' => 'pipe',
																														  'left' =>
																														  [
																															'type' => 'variable',
																															'name' => 'val',
																														  ],
																														  'right' =>
																														  [
																															'type' => 'call',
																															'name' => 'length',
																															'args' =>
																															[
																															],
																														  ],
																														],
																														'right' =>
																														[
																														  'type' => 'literal',
																														  'value' => 1,
																														],
																													  ],
																													],
																													'then' =>
																													[
																													  'type' => 'call',
																													  'name' => 'test',
																													  'args' =>
																													  [
																														0 =>
																														[
																														  'type' => 'index',
																														  'key' =>
																														  [
																															'type' => 'literal',
																															'value' => 0,
																														  ],
																														  'opt' => false,
																														  'expr' =>
																														  [
																															'type' => 'variable',
																															'name' => 'val',
																														  ],
																														],
																														1 =>
																														[
																														  'type' => 'index',
																														  'key' =>
																														  [
																															'type' => 'literal',
																															'value' => 1,
																														  ],
																														  'opt' => false,
																														  'expr' =>
																														  [
																															'type' => 'variable',
																															'name' => 'val',
																														  ],
																														],
																													  ],
																													],
																													'else' =>
																													[
																													  'type' => 'if',
																													  'cond' =>
																													  [
																														'type' => 'and',
																														'left' =>
																														[
																														  'type' => 'compare',
																														  'op' => '==',
																														  'left' =>
																														  [
																															'type' => 'variable',
																															'name' => 'vt',
																														  ],
																														  'right' =>
																														  [
																															'type' => 'literal',
																															'value' => 'array',
																														  ],
																														],
																														'right' =>
																														[
																														  'type' => 'compare',
																														  'op' => '>',
																														  'left' =>
																														  [
																															'type' => 'pipe',
																															'left' =>
																															[
																															  'type' => 'variable',
																															  'name' => 'val',
																															],
																															'right' =>
																															[
																															  'type' => 'call',
																															  'name' => 'length',
																															  'args' =>
																															  [
																															  ],
																															],
																														  ],
																														  'right' =>
																														  [
																															'type' => 'literal',
																															'value' => 0,
																														  ],
																														],
																													  ],
																													  'then' =>
																													  [
																														'type' => 'call',
																														'name' => 'test',
																														'args' =>
																														[
																														  0 =>
																														  [
																															'type' => 'index',
																															'key' =>
																															[
																															  'type' => 'literal',
																															  'value' => 0,
																															],
																															'opt' => false,
																															'expr' =>
																															[
																															  'type' => 'variable',
																															  'name' => 'val',
																															],
																														  ],
																														  1 =>
																														  [
																															'type' => 'literal',
																															'value' => null,
																														  ],
																														],
																													  ],
																													  'else' =>
																													  [
																														'type' => 'call',
																														'name' => 'error',
																														'args' =>
																														[
																														  0 =>
																														  [
																															'type' => 'binop',
																															'op' => '+',
																															'left' =>
																															[
																															  'type' => 'variable',
																															  'name' => 'vt',
																															],
																															'right' =>
																															[
																															  'type' => 'literal',
																															  'value' => ' not a string or array',
																															],
																														  ],
																														],
																													  ],
																													],
																												  ],
																												],
																											  ],
																											  'rest' =>
																											  [
																												'type' => 'def',
																												'name' => 'capture',
																												'params' =>
																												[
																												  0 =>
																												  [
																													'kind' => 'filter',
																													'name' => 're',
																												  ],
																												  1 =>
																												  [
																													'kind' => 'filter',
																													'name' => 'mods',
																												  ],
																												],
																												'body' =>
																												[
																												  'type' => 'pipe',
																												  'left' =>
																												  [
																													'type' => 'call',
																													'name' => 'match',
																													'args' =>
																													[
																													  0 =>
																													  [
																														'type' => 'call',
																														'name' => 're',
																														'args' =>
																														[
																														],
																													  ],
																													  1 =>
																													  [
																														'type' => 'call',
																														'name' => 'mods',
																														'args' =>
																														[
																														],
																													  ],
																													],
																												  ],
																												  'right' =>
																												  [
																													'type' => 'reduce',
																													'src' =>
																													[
																													  'type' => 'pipe',
																													  'left' =>
																													  [
																														'type' => 'field',
																														'expr' =>
																														[
																														  'type' => 'identity',
																														],
																														'name' => 'captures',
																														'opt' => false,
																													  ],
																													  'right' =>
																													  [
																														'type' => 'pipe',
																														'left' =>
																														[
																														  'type' => 'iter',
																														  'opt' => false,
																														  'expr' =>
																														  [
																															'type' => 'identity',
																														  ],
																														],
																														'right' =>
																														[
																														  'type' => 'pipe',
																														  'left' =>
																														  [
																															'type' => 'call',
																															'name' => 'select',
																															'args' =>
																															[
																															  0 =>
																															  [
																																'type' => 'compare',
																																'op' => '!=',
																																'left' =>
																																[
																																  'type' => 'field',
																																  'expr' =>
																																  [
																																	'type' => 'identity',
																																  ],
																																  'name' => 'name',
																																  'opt' => false,
																																],
																																'right' =>
																																[
																																  'type' => 'literal',
																																  'value' => null,
																																],
																															  ],
																															],
																														  ],
																														  'right' =>
																														  [
																															'type' => 'object',
																															'pairs' =>
																															[
																															  0 =>
																															  [
																																'key' =>
																																[
																																  'type' => 'field',
																																  'expr' =>
																																  [
																																	'type' => 'identity',
																																  ],
																																  'name' => 'name',
																																  'opt' => false,
																																],
																																'value' =>
																																[
																																  'type' => 'field',
																																  'expr' =>
																																  [
																																	'type' => 'identity',
																																  ],
																																  'name' => 'string',
																																  'opt' => false,
																																],
																															  ],
																															],
																														  ],
																														],
																													  ],
																													],
																													'pattern' =>
																													[
																													  'type' => 'var_pattern',
																													  'name' => 'pair',
																													],
																													'init' =>
																													[
																													  'type' => 'object',
																													  'pairs' =>
																													  [
																													  ],
																													],
																													'update' =>
																													[
																													  'type' => 'binop',
																													  'op' => '+',
																													  'left' =>
																													  [
																														'type' => 'identity',
																													  ],
																													  'right' =>
																													  [
																														'type' => 'variable',
																														'name' => 'pair',
																													  ],
																													],
																												  ],
																												],
																												'rest' =>
																												[
																												  'type' => 'def',
																												  'name' => 'capture',
																												  'params' =>
																												  [
																													0 =>
																													[
																													  'kind' => 'value',
																													  'name' => 'val',
																													],
																												  ],
																												  'body' =>
																												  [
																													'type' => 'bind',
																													'expr' =>
																													[
																													  'type' => 'pipe',
																													  'left' =>
																													  [
																														'type' => 'variable',
																														'name' => 'val',
																													  ],
																													  'right' =>
																													  [
																														'type' => 'call',
																														'name' => 'type',
																														'args' =>
																														[
																														],
																													  ],
																													],
																													'pattern' =>
																													[
																													  'type' => 'var_pattern',
																													  'name' => 'vt',
																													],
																													'body' =>
																													[
																													  'type' => 'if',
																													  'cond' =>
																													  [
																														'type' => 'compare',
																														'op' => '==',
																														'left' =>
																														[
																														  'type' => 'variable',
																														  'name' => 'vt',
																														],
																														'right' =>
																														[
																														  'type' => 'literal',
																														  'value' => 'string',
																														],
																													  ],
																													  'then' =>
																													  [
																														'type' => 'call',
																														'name' => 'capture',
																														'args' =>
																														[
																														  0 =>
																														  [
																															'type' => 'variable',
																															'name' => 'val',
																														  ],
																														  1 =>
																														  [
																															'type' => 'literal',
																															'value' => null,
																														  ],
																														],
																													  ],
																													  'else' =>
																													  [
																														'type' => 'if',
																														'cond' =>
																														[
																														  'type' => 'and',
																														  'left' =>
																														  [
																															'type' => 'compare',
																															'op' => '==',
																															'left' =>
																															[
																															  'type' => 'variable',
																															  'name' => 'vt',
																															],
																															'right' =>
																															[
																															  'type' => 'literal',
																															  'value' => 'array',
																															],
																														  ],
																														  'right' =>
																														  [
																															'type' => 'compare',
																															'op' => '>',
																															'left' =>
																															[
																															  'type' => 'pipe',
																															  'left' =>
																															  [
																																'type' => 'variable',
																																'name' => 'val',
																															  ],
																															  'right' =>
																															  [
																																'type' => 'call',
																																'name' => 'length',
																																'args' =>
																																[
																																],
																															  ],
																															],
																															'right' =>
																															[
																															  'type' => 'literal',
																															  'value' => 1,
																															],
																														  ],
																														],
																														'then' =>
																														[
																														  'type' => 'call',
																														  'name' => 'capture',
																														  'args' =>
																														  [
																															0 =>
																															[
																															  'type' => 'index',
																															  'key' =>
																															  [
																																'type' => 'literal',
																																'value' => 0,
																															  ],
																															  'opt' => false,
																															  'expr' =>
																															  [
																																'type' => 'variable',
																																'name' => 'val',
																															  ],
																															],
																															1 =>
																															[
																															  'type' => 'index',
																															  'key' =>
																															  [
																																'type' => 'literal',
																																'value' => 1,
																															  ],
																															  'opt' => false,
																															  'expr' =>
																															  [
																																'type' => 'variable',
																																'name' => 'val',
																															  ],
																															],
																														  ],
																														],
																														'else' =>
																														[
																														  'type' => 'if',
																														  'cond' =>
																														  [
																															'type' => 'and',
																															'left' =>
																															[
																															  'type' => 'compare',
																															  'op' => '==',
																															  'left' =>
																															  [
																																'type' => 'variable',
																																'name' => 'vt',
																															  ],
																															  'right' =>
																															  [
																																'type' => 'literal',
																																'value' => 'array',
																															  ],
																															],
																															'right' =>
																															[
																															  'type' => 'compare',
																															  'op' => '>',
																															  'left' =>
																															  [
																																'type' => 'pipe',
																																'left' =>
																																[
																																  'type' => 'variable',
																																  'name' => 'val',
																																],
																																'right' =>
																																[
																																  'type' => 'call',
																																  'name' => 'length',
																																  'args' =>
																																  [
																																  ],
																																],
																															  ],
																															  'right' =>
																															  [
																																'type' => 'literal',
																																'value' => 0,
																															  ],
																															],
																														  ],
																														  'then' =>
																														  [
																															'type' => 'call',
																															'name' => 'capture',
																															'args' =>
																															[
																															  0 =>
																															  [
																																'type' => 'index',
																																'key' =>
																																[
																																  'type' => 'literal',
																																  'value' => 0,
																																],
																																'opt' => false,
																																'expr' =>
																																[
																																  'type' => 'variable',
																																  'name' => 'val',
																																],
																															  ],
																															  1 =>
																															  [
																																'type' => 'literal',
																																'value' => null,
																															  ],
																															],
																														  ],
																														  'else' =>
																														  [
																															'type' => 'call',
																															'name' => 'error',
																															'args' =>
																															[
																															  0 =>
																															  [
																																'type' => 'binop',
																																'op' => '+',
																																'left' =>
																																[
																																  'type' => 'variable',
																																  'name' => 'vt',
																																],
																																'right' =>
																																[
																																  'type' => 'literal',
																																  'value' => ' not a string or array',
																																],
																															  ],
																															],
																														  ],
																														],
																													  ],
																													],
																												  ],
																												  'rest' =>
																												  [
																													'type' => 'def',
																													'name' => 'scan',
																													'params' =>
																													[
																													  0 =>
																													  [
																														'kind' => 'value',
																														'name' => 're',
																													  ],
																													  1 =>
																													  [
																														'kind' => 'value',
																														'name' => 'flags',
																													  ],
																													],
																													'body' =>
																													[
																													  'type' => 'pipe',
																													  'left' =>
																													  [
																														'type' => 'call',
																														'name' => 'match',
																														'args' =>
																														[
																														  0 =>
																														  [
																															'type' => 'variable',
																															'name' => 're',
																														  ],
																														  1 =>
																														  [
																															'type' => 'binop',
																															'op' => '+',
																															'left' =>
																															[
																															  'type' => 'literal',
																															  'value' => 'g',
																															],
																															'right' =>
																															[
																															  'type' => 'variable',
																															  'name' => 'flags',
																															],
																														  ],
																														],
																													  ],
																													  'right' =>
																													  [
																														'type' => 'if',
																														'cond' =>
																														[
																														  'type' => 'pipe',
																														  'left' =>
																														  [
																															'type' => 'field',
																															'expr' =>
																															[
																															  'type' => 'identity',
																															],
																															'name' => 'captures',
																															'opt' => false,
																														  ],
																														  'right' =>
																														  [
																															'type' => 'compare',
																															'op' => '>',
																															'left' =>
																															[
																															  'type' => 'call',
																															  'name' => 'length',
																															  'args' =>
																															  [
																															  ],
																															],
																															'right' =>
																															[
																															  'type' => 'literal',
																															  'value' => 0,
																															],
																														  ],
																														],
																														'then' =>
																														[
																														  'type' => 'array',
																														  'expr' =>
																														  [
																															'type' => 'pipe',
																															'left' =>
																															[
																															  'type' => 'field',
																															  'expr' =>
																															  [
																																'type' => 'identity',
																															  ],
																															  'name' => 'captures',
																															  'opt' => false,
																															],
																															'right' =>
																															[
																															  'type' => 'pipe',
																															  'left' =>
																															  [
																																'type' => 'iter',
																																'opt' => false,
																																'expr' =>
																																[
																																  'type' => 'identity',
																																],
																															  ],
																															  'right' =>
																															  [
																																'type' => 'field',
																																'expr' =>
																																[
																																  'type' => 'identity',
																																],
																																'name' => 'string',
																																'opt' => false,
																															  ],
																															],
																														  ],
																														],
																														'else' =>
																														[
																														  'type' => 'field',
																														  'expr' =>
																														  [
																															'type' => 'identity',
																														  ],
																														  'name' => 'string',
																														  'opt' => false,
																														],
																													  ],
																													],
																													'rest' =>
																													[
																													  'type' => 'def',
																													  'name' => 'scan',
																													  'params' =>
																													  [
																														0 =>
																														[
																														  'kind' => 'value',
																														  'name' => 're',
																														],
																													  ],
																													  'body' =>
																													  [
																														'type' => 'call',
																														'name' => 'scan',
																														'args' =>
																														[
																														  0 =>
																														  [
																															'type' => 'variable',
																															'name' => 're',
																														  ],
																														  1 =>
																														  [
																															'type' => 'literal',
																															'value' => null,
																														  ],
																														],
																													  ],
																													  'rest' =>
																													  [
																														'type' => 'def',
																														'name' => 'splits',
																														'params' =>
																														[
																														  0 =>
																														  [
																															'kind' => 'value',
																															'name' => 're',
																														  ],
																														  1 =>
																														  [
																															'kind' => 'value',
																															'name' => 'flags',
																														  ],
																														],
																														'body' =>
																														[
																														  'type' => 'index',
																														  'key' =>
																														  [
																															'type' => 'foreach',
																															'src' =>
																															[
																															  'type' => 'comma',
																															  'left' =>
																															  [
																																'type' => 'call',
																																'name' => 'match',
																																'args' =>
																																[
																																  0 =>
																																  [
																																	'type' => 'variable',
																																	'name' => 're',
																																  ],
																																  1 =>
																																  [
																																	'type' => 'binop',
																																	'op' => '+',
																																	'left' =>
																																	[
																																	  'type' => 'variable',
																																	  'name' => 'flags',
																																	],
																																	'right' =>
																																	[
																																	  'type' => 'literal',
																																	  'value' => 'g',
																																	],
																																  ],
																																],
																															  ],
																															  'right' =>
																															  [
																																'type' => 'literal',
																																'value' => null,
																															  ],
																															],
																															'pattern' =>
																															[
																															  'type' => 'obj_pattern',
																															  'fields' =>
																															  [
																																0 =>
																																[
																																  'key' =>
																																  [
																																	'type' => 'literal',
																																	'value' => 'offset',
																																  ],
																																  'pattern' =>
																																  [
																																	'type' => 'var_pattern',
																																	'name' => 'offset',
																																  ],
																																],
																																1 =>
																																[
																																  'key' =>
																																  [
																																	'type' => 'literal',
																																	'value' => 'length',
																																  ],
																																  'pattern' =>
																																  [
																																	'type' => 'var_pattern',
																																	'name' => 'length',
																																  ],
																																],
																															  ],
																															],
																															'init' =>
																															[
																															  'type' => 'literal',
																															  'value' => null,
																															],
																															'update' =>
																															[
																															  'type' => 'object',
																															  'pairs' =>
																															  [
																																0 =>
																																[
																																  'key' =>
																																  [
																																	'type' => 'literal',
																																	'value' => 'start',
																																  ],
																																  'value' =>
																																  [
																																	'type' => 'field',
																																	'expr' =>
																																	[
																																	  'type' => 'identity',
																																	],
																																	'name' => 'next',
																																	'opt' => false,
																																  ],
																																],
																																1 =>
																																[
																																  'key' =>
																																  [
																																	'type' => 'literal',
																																	'value' => 'end',
																																  ],
																																  'value' =>
																																  [
																																	'type' => 'variable',
																																	'name' => 'offset',
																																  ],
																																],
																																2 =>
																																[
																																  'key' =>
																																  [
																																	'type' => 'literal',
																																	'value' => 'next',
																																  ],
																																  'value' =>
																																  [
																																	'type' => 'binop',
																																	'op' => '+',
																																	'left' =>
																																	[
																																	  'type' => 'variable',
																																	  'name' => 'offset',
																																	],
																																	'right' =>
																																	[
																																	  'type' => 'variable',
																																	  'name' => 'length',
																																	],
																																  ],
																																],
																															  ],
																															],
																															'extract' => null,
																														  ],
																														  'opt' => false,
																														  'expr' =>
																														  [
																															'type' => 'identity',
																														  ],
																														],
																														'rest' =>
																														[
																														  'type' => 'def',
																														  'name' => 'splits',
																														  'params' =>
																														  [
																															0 =>
																															[
																															  'kind' => 'value',
																															  'name' => 're',
																															],
																														  ],
																														  'body' =>
																														  [
																															'type' => 'call',
																															'name' => 'splits',
																															'args' =>
																															[
																															  0 =>
																															  [
																																'type' => 'variable',
																																'name' => 're',
																															  ],
																															  1 =>
																															  [
																																'type' => 'literal',
																																'value' => null,
																															  ],
																															],
																														  ],
																														  'rest' =>
																														  [
																															'type' => 'def',
																															'name' => 'split',
																															'params' =>
																															[
																															  0 =>
																															  [
																																'kind' => 'value',
																																'name' => 're',
																															  ],
																															  1 =>
																															  [
																																'kind' => 'value',
																																'name' => 'flags',
																															  ],
																															],
																															'body' =>
																															[
																															  'type' => 'array',
																															  'expr' =>
																															  [
																																'type' => 'call',
																																'name' => 'splits',
																																'args' =>
																																[
																																  0 =>
																																  [
																																	'type' => 'variable',
																																	'name' => 're',
																																  ],
																																  1 =>
																																  [
																																	'type' => 'variable',
																																	'name' => 'flags',
																																  ],
																																],
																															  ],
																															],
																															'rest' =>
																															[
																															  'type' => 'def',
																															  'name' => 'sub',
																															  'params' =>
																															  [
																																0 =>
																																[
																																  'kind' => 'value',
																																  'name' => 're',
																																],
																																1 =>
																																[
																																  'kind' => 'filter',
																																  'name' => 's',
																																],
																																2 =>
																																[
																																  'kind' => 'value',
																																  'name' => 'flags',
																																],
																															  ],
																															  'body' =>
																															  [
																																'type' => 'bind',
																																'expr' =>
																																[
																																  'type' => 'identity',
																																],
																																'pattern' =>
																																[
																																  'type' => 'var_pattern',
																																  'name' => 'in',
																																],
																																'body' =>
																																[
																																  'type' => 'alternative',
																																  'left' =>
																																  [
																																	'type' => 'pipe',
																																	'left' =>
																																	[
																																	  'type' => 'reduce',
																																	  'src' =>
																																	  [
																																		'type' => 'call',
																																		'name' => 'match',
																																		'args' =>
																																		[
																																		  0 =>
																																		  [
																																			'type' => 'variable',
																																			'name' => 're',
																																		  ],
																																		  1 =>
																																		  [
																																			'type' => 'variable',
																																			'name' => 'flags',
																																		  ],
																																		],
																																	  ],
																																	  'pattern' =>
																																	  [
																																		'type' => 'var_pattern',
																																		'name' => 'edit',
																																	  ],
																																	  'init' =>
																																	  [
																																		'type' => 'object',
																																		'pairs' =>
																																		[
																																		  0 =>
																																		  [
																																			'key' =>
																																			[
																																			  'type' => 'literal',
																																			  'value' => 'result',
																																			],
																																			'value' =>
																																			[
																																			  'type' => 'array',
																																			  'expr' => null,
																																			],
																																		  ],
																																		  1 =>
																																		  [
																																			'key' =>
																																			[
																																			  'type' => 'literal',
																																			  'value' => 'previous',
																																			],
																																			'value' =>
																																			[
																																			  'type' => 'literal',
																																			  'value' => 0,
																																			],
																																		  ],
																																		],
																																	  ],
																																	  'update' =>
																																	  [
																																		'type' => 'bind',
																																		'expr' =>
																																		[
																																		  'type' => 'slice',
																																		  'from' =>
																																		  [
																																			'type' => 'field',
																																			'expr' =>
																																			[
																																			  'type' => 'identity',
																																			],
																																			'name' => 'previous',
																																			'opt' => false,
																																		  ],
																																		  'to' =>
																																		  [
																																			'type' => 'pipe',
																																			'left' =>
																																			[
																																			  'type' => 'variable',
																																			  'name' => 'edit',
																																			],
																																			'right' =>
																																			[
																																			  'type' => 'field',
																																			  'expr' =>
																																			  [
																																				'type' => 'identity',
																																			  ],
																																			  'name' => 'offset',
																																			  'opt' => false,
																																			],
																																		  ],
																																		  'opt' => false,
																																		  'expr' =>
																																		  [
																																			'type' => 'variable',
																																			'name' => 'in',
																																		  ],
																																		],
																																		'pattern' =>
																																		[
																																		  'type' => 'var_pattern',
																																		  'name' => 'gap',
																																		],
																																		'body' =>
																																		[
																																		  'type' => 'bind',
																																		  'expr' =>
																																		  [
																																			'type' => 'array',
																																			'expr' =>
																																			[
																																			  'type' => 'pipe',
																																			  'left' =>
																																			  [
																																				'type' => 'reduce',
																																				'src' =>
																																				[
																																				  'type' => 'pipe',
																																				  'left' =>
																																				  [
																																					'type' => 'variable',
																																					'name' => 'edit',
																																				  ],
																																				  'right' =>
																																				  [
																																					'type' => 'pipe',
																																					'left' =>
																																					[
																																					  'type' => 'field',
																																					  'expr' =>
																																					  [
																																						'type' => 'identity',
																																					  ],
																																					  'name' => 'captures',
																																					  'opt' => false,
																																					],
																																					'right' =>
																																					[
																																					  'type' => 'pipe',
																																					  'left' =>
																																					  [
																																						'type' => 'iter',
																																						'opt' => false,
																																						'expr' =>
																																						[
																																						  'type' => 'identity',
																																						],
																																					  ],
																																					  'right' =>
																																					  [
																																						'type' => 'pipe',
																																						'left' =>
																																						[
																																						  'type' => 'call',
																																						  'name' => 'select',
																																						  'args' =>
																																						  [
																																							0 =>
																																							[
																																							  'type' => 'compare',
																																							  'op' => '!=',
																																							  'left' =>
																																							  [
																																								'type' => 'field',
																																								'expr' =>
																																								[
																																								  'type' => 'identity',
																																								],
																																								'name' => 'name',
																																								'opt' => false,
																																							  ],
																																							  'right' =>
																																							  [
																																								'type' => 'literal',
																																								'value' => null,
																																							  ],
																																							],
																																						  ],
																																						],
																																						'right' =>
																																						[
																																						  'type' => 'object',
																																						  'pairs' =>
																																						  [
																																							0 =>
																																							[
																																							  'key' =>
																																							  [
																																								'type' => 'field',
																																								'expr' =>
																																								[
																																								  'type' => 'identity',
																																								],
																																								'name' => 'name',
																																								'opt' => false,
																																							  ],
																																							  'value' =>
																																							  [
																																								'type' => 'field',
																																								'expr' =>
																																								[
																																								  'type' => 'identity',
																																								],
																																								'name' => 'string',
																																								'opt' => false,
																																							  ],
																																							],
																																						  ],
																																						],
																																					  ],
																																					],
																																				  ],
																																				],
																																				'pattern' =>
																																				[
																																				  'type' => 'var_pattern',
																																				  'name' => 'pair',
																																				],
																																				'init' =>
																																				[
																																				  'type' => 'object',
																																				  'pairs' =>
																																				  [
																																				  ],
																																				],
																																				'update' =>
																																				[
																																				  'type' => 'binop',
																																				  'op' => '+',
																																				  'left' =>
																																				  [
																																					'type' => 'identity',
																																				  ],
																																				  'right' =>
																																				  [
																																					'type' => 'variable',
																																					'name' => 'pair',
																																				  ],
																																				],
																																			  ],
																																			  'right' =>
																																			  [
																																				'type' => 'call',
																																				'name' => 's',
																																				'args' =>
																																				[
																																				],
																																			  ],
																																			],
																																		  ],
																																		  'pattern' =>
																																		  [
																																			'type' => 'var_pattern',
																																			'name' => 'inserts',
																																		  ],
																																		  'body' =>
																																		  [
																																			'type' => 'pipe',
																																			'left' =>
																																			[
																																			  'type' => 'reduce',
																																			  'src' =>
																																			  [
																																				'type' => 'call',
																																				'name' => 'range',
																																				'args' =>
																																				[
																																				  0 =>
																																				  [
																																					'type' => 'literal',
																																					'value' => 0,
																																				  ],
																																				  1 =>
																																				  [
																																					'type' => 'pipe',
																																					'left' =>
																																					[
																																					  'type' => 'variable',
																																					  'name' => 'inserts',
																																					],
																																					'right' =>
																																					[
																																					  'type' => 'call',
																																					  'name' => 'length',
																																					  'args' =>
																																					  [
																																					  ],
																																					],
																																				  ],
																																				],
																																			  ],
																																			  'pattern' =>
																																			  [
																																				'type' => 'var_pattern',
																																				'name' => 'ix',
																																			  ],
																																			  'init' =>
																																			  [
																																				'type' => 'identity',
																																			  ],
																																			  'update' =>
																																			  [
																																				'type' => 'assign',
																																				'op' => '+=',
																																				'left' =>
																																				[
																																				  'type' => 'index',
																																				  'key' =>
																																				  [
																																					'type' => 'variable',
																																					'name' => 'ix',
																																				  ],
																																				  'opt' => false,
																																				  'expr' =>
																																				  [
																																					'type' => 'field',
																																					'expr' =>
																																					[
																																					  'type' => 'identity',
																																					],
																																					'name' => 'result',
																																					'opt' => false,
																																				  ],
																																				],
																																				'right' =>
																																				[
																																				  'type' => 'binop',
																																				  'op' => '+',
																																				  'left' =>
																																				  [
																																					'type' => 'variable',
																																					'name' => 'gap',
																																				  ],
																																				  'right' =>
																																				  [
																																					'type' => 'index',
																																					'key' =>
																																					[
																																					  'type' => 'variable',
																																					  'name' => 'ix',
																																					],
																																					'opt' => false,
																																					'expr' =>
																																					[
																																					  'type' => 'variable',
																																					  'name' => 'inserts',
																																					],
																																				  ],
																																				],
																																			  ],
																																			],
																																			'right' =>
																																			[
																																			  'type' => 'assign',
																																			  'op' => '=',
																																			  'left' =>
																																			  [
																																				'type' => 'field',
																																				'expr' =>
																																				[
																																				  'type' => 'identity',
																																				],
																																				'name' => 'previous',
																																				'opt' => false,
																																			  ],
																																			  'right' =>
																																			  [
																																				'type' => 'pipe',
																																				'left' =>
																																				[
																																				  'type' => 'variable',
																																				  'name' => 'edit',
																																				],
																																				'right' =>
																																				[
																																				  'type' => 'binop',
																																				  'op' => '+',
																																				  'left' =>
																																				  [
																																					'type' => 'field',
																																					'expr' =>
																																					[
																																					  'type' => 'identity',
																																					],
																																					'name' => 'offset',
																																					'opt' => false,
																																				  ],
																																				  'right' =>
																																				  [
																																					'type' => 'field',
																																					'expr' =>
																																					[
																																					  'type' => 'identity',
																																					],
																																					'name' => 'length',
																																					'opt' => false,
																																				  ],
																																				],
																																			  ],
																																			],
																																		  ],
																																		],
																																	  ],
																																	],
																																	'right' =>
																																	[
																																	  'type' => 'binop',
																																	  'op' => '+',
																																	  'left' =>
																																	  [
																																		'type' => 'iter',
																																		'opt' => false,
																																		'expr' =>
																																		[
																																		  'type' => 'field',
																																		  'expr' =>
																																		  [
																																			'type' => 'identity',
																																		  ],
																																		  'name' => 'result',
																																		  'opt' => false,
																																		],
																																	  ],
																																	  'right' =>
																																	  [
																																		'type' => 'slice',
																																		'from' =>
																																		[
																																		  'type' => 'field',
																																		  'expr' =>
																																		  [
																																			'type' => 'identity',
																																		  ],
																																		  'name' => 'previous',
																																		  'opt' => false,
																																		],
																																		'to' => null,
																																		'opt' => false,
																																		'expr' =>
																																		[
																																		  'type' => 'variable',
																																		  'name' => 'in',
																																		],
																																	  ],
																																	],
																																  ],
																																  'right' =>
																																  [
																																	'type' => 'variable',
																																	'name' => 'in',
																																  ],
																																],
																															  ],
																															  'rest' =>
																															  [
																																'type' => 'def',
																																'name' => 'sub',
																																'params' =>
																																[
																																  0 =>
																																  [
																																	'kind' => 'value',
																																	'name' => 're',
																																  ],
																																  1 =>
																																  [
																																	'kind' => 'filter',
																																	'name' => 's',
																																  ],
																																],
																																'body' =>
																																[
																																  'type' => 'call',
																																  'name' => 'sub',
																																  'args' =>
																																  [
																																	0 =>
																																	[
																																	  'type' => 'variable',
																																	  'name' => 're',
																																	],
																																	1 =>
																																	[
																																	  'type' => 'call',
																																	  'name' => 's',
																																	  'args' =>
																																	  [
																																	  ],
																																	],
																																	2 =>
																																	[
																																	  'type' => 'string',
																																	  'fmt' => null,
																																	  'parts' =>
																																	  [
																																	  ],
																																	],
																																  ],
																																],
																																'rest' =>
																																[
																																  'type' => 'def',
																																  'name' => 'gsub',
																																  'params' =>
																																  [
																																	0 =>
																																	[
																																	  'kind' => 'value',
																																	  'name' => 're',
																																	],
																																	1 =>
																																	[
																																	  'kind' => 'filter',
																																	  'name' => 's',
																																	],
																																	2 =>
																																	[
																																	  'kind' => 'filter',
																																	  'name' => 'flags',
																																	],
																																  ],
																																  'body' =>
																																  [
																																	'type' => 'call',
																																	'name' => 'sub',
																																	'args' =>
																																	[
																																	  0 =>
																																	  [
																																		'type' => 'variable',
																																		'name' => 're',
																																	  ],
																																	  1 =>
																																	  [
																																		'type' => 'call',
																																		'name' => 's',
																																		'args' =>
																																		[
																																		],
																																	  ],
																																	  2 =>
																																	  [
																																		'type' => 'binop',
																																		'op' => '+',
																																		'left' =>
																																		[
																																		  'type' => 'call',
																																		  'name' => 'flags',
																																		  'args' =>
																																		  [
																																		  ],
																																		],
																																		'right' =>
																																		[
																																		  'type' => 'literal',
																																		  'value' => 'g',
																																		],
																																	  ],
																																	],
																																  ],
																																  'rest' =>
																																  [
																																	'type' => 'def',
																																	'name' => 'gsub',
																																	'params' =>
																																	[
																																	  0 =>
																																	  [
																																		'kind' => 'value',
																																		'name' => 're',
																																	  ],
																																	  1 =>
																																	  [
																																		'kind' => 'filter',
																																		'name' => 's',
																																	  ],
																																	],
																																	'body' =>
																																	[
																																	  'type' => 'call',
																																	  'name' => 'sub',
																																	  'args' =>
																																	  [
																																		0 =>
																																		[
																																		  'type' => 'variable',
																																		  'name' => 're',
																																		],
																																		1 =>
																																		[
																																		  'type' => 'call',
																																		  'name' => 's',
																																		  'args' =>
																																		  [
																																		  ],
																																		],
																																		2 =>
																																		[
																																		  'type' => 'literal',
																																		  'value' => 'g',
																																		],
																																	  ],
																																	],
																																	'rest' =>
																																	[
																																	  'type' => 'def',
																																	  'name' => 'while',
																																	  'params' =>
																																	  [
																																		0 =>
																																		[
																																		  'kind' => 'filter',
																																		  'name' => 'cond',
																																		],
																																		1 =>
																																		[
																																		  'kind' => 'filter',
																																		  'name' => 'update',
																																		],
																																	  ],
																																	  'body' =>
																																	  [
																																		'type' => 'def',
																																		'name' => '_while',
																																		'params' =>
																																		[
																																		],
																																		'body' =>
																																		[
																																		  'type' => 'if',
																																		  'cond' =>
																																		  [
																																			'type' => 'call',
																																			'name' => 'cond',
																																			'args' =>
																																			[
																																			],
																																		  ],
																																		  'then' =>
																																		  [
																																			'type' => 'comma',
																																			'left' =>
																																			[
																																			  'type' => 'identity',
																																			],
																																			'right' =>
																																			[
																																			  'type' => 'pipe',
																																			  'left' =>
																																			  [
																																				'type' => 'call',
																																				'name' => 'update',
																																				'args' =>
																																				[
																																				],
																																			  ],
																																			  'right' =>
																																			  [
																																				'type' => 'call',
																																				'name' => '_while',
																																				'args' =>
																																				[
																																				],
																																			  ],
																																			],
																																		  ],
																																		  'else' =>
																																		  [
																																			'type' => 'call',
																																			'name' => 'empty',
																																			'args' =>
																																			[
																																			],
																																		  ],
																																		],
																																		'rest' =>
																																		[
																																		  'type' => 'call',
																																		  'name' => '_while',
																																		  'args' =>
																																		  [
																																		  ],
																																		],
																																	  ],
																																	  'rest' =>
																																	  [
																																		'type' => 'def',
																																		'name' => 'until',
																																		'params' =>
																																		[
																																		  0 =>
																																		  [
																																			'kind' => 'filter',
																																			'name' => 'cond',
																																		  ],
																																		  1 =>
																																		  [
																																			'kind' => 'filter',
																																			'name' => 'next',
																																		  ],
																																		],
																																		'body' =>
																																		[
																																		  'type' => 'def',
																																		  'name' => '_until',
																																		  'params' =>
																																		  [
																																		  ],
																																		  'body' =>
																																		  [
																																			'type' => 'if',
																																			'cond' =>
																																			[
																																			  'type' => 'call',
																																			  'name' => 'cond',
																																			  'args' =>
																																			  [
																																			  ],
																																			],
																																			'then' =>
																																			[
																																			  'type' => 'identity',
																																			],
																																			'else' =>
																																			[
																																			  'type' => 'pipe',
																																			  'left' =>
																																			  [
																																				'type' => 'call',
																																				'name' => 'next',
																																				'args' =>
																																				[
																																				],
																																			  ],
																																			  'right' =>
																																			  [
																																				'type' => 'call',
																																				'name' => '_until',
																																				'args' =>
																																				[
																																				],
																																			  ],
																																			],
																																		  ],
																																		  'rest' =>
																																		  [
																																			'type' => 'call',
																																			'name' => '_until',
																																			'args' =>
																																			[
																																			],
																																		  ],
																																		],
																																		'rest' =>
																																		[
																																		  'type' => 'def',
																																		  'name' => 'limit',
																																		  'params' =>
																																		  [
																																			0 =>
																																			[
																																			  'kind' => 'value',
																																			  'name' => 'n',
																																			],
																																			1 =>
																																			[
																																			  'kind' => 'filter',
																																			  'name' => 'expr',
																																			],
																																		  ],
																																		  'body' =>
																																		  [
																																			'type' => 'if',
																																			'cond' =>
																																			[
																																			  'type' => 'compare',
																																			  'op' => '>',
																																			  'left' =>
																																			  [
																																				'type' => 'variable',
																																				'name' => 'n',
																																			  ],
																																			  'right' =>
																																			  [
																																				'type' => 'literal',
																																				'value' => 0,
																																			  ],
																																			],
																																			'then' =>
																																			[
																																			  'type' => 'label',
																																			  'name' => 'out',
																																			  'body' =>
																																			  [
																																				'type' => 'foreach',
																																				'src' =>
																																				[
																																				  'type' => 'call',
																																				  'name' => 'expr',
																																				  'args' =>
																																				  [
																																				  ],
																																				],
																																				'pattern' =>
																																				[
																																				  'type' => 'var_pattern',
																																				  'name' => 'item',
																																				],
																																				'init' =>
																																				[
																																				  'type' => 'variable',
																																				  'name' => 'n',
																																				],
																																				'update' =>
																																				[
																																				  'type' => 'binop',
																																				  'op' => '-',
																																				  'left' =>
																																				  [
																																					'type' => 'identity',
																																				  ],
																																				  'right' =>
																																				  [
																																					'type' => 'literal',
																																					'value' => 1,
																																				  ],
																																				],
																																				'extract' =>
																																				[
																																				  'type' => 'comma',
																																				  'left' =>
																																				  [
																																					'type' => 'variable',
																																					'name' => 'item',
																																				  ],
																																				  'right' =>
																																				  [
																																					'type' => 'if',
																																					'cond' =>
																																					[
																																					  'type' => 'compare',
																																					  'op' => '<=',
																																					  'left' =>
																																					  [
																																						'type' => 'identity',
																																					  ],
																																					  'right' =>
																																					  [
																																						'type' => 'literal',
																																						'value' => 0,
																																					  ],
																																					],
																																					'then' =>
																																					[
																																					  'type' => 'break',
																																					  'name' => 'out',
																																					],
																																					'else' =>
																																					[
																																					  'type' => 'call',
																																					  'name' => 'empty',
																																					  'args' =>
																																					  [
																																					  ],
																																					],
																																				  ],
																																				],
																																			  ],
																																			],
																																			'else' =>
																																			[
																																			  'type' => 'if',
																																			  'cond' =>
																																			  [
																																				'type' => 'compare',
																																				'op' => '==',
																																				'left' =>
																																				[
																																				  'type' => 'variable',
																																				  'name' => 'n',
																																				],
																																				'right' =>
																																				[
																																				  'type' => 'literal',
																																				  'value' => 0,
																																				],
																																			  ],
																																			  'then' =>
																																			  [
																																				'type' => 'call',
																																				'name' => 'empty',
																																				'args' =>
																																				[
																																				],
																																			  ],
																																			  'else' =>
																																			  [
																																				'type' => 'call',
																																				'name' => 'error',
																																				'args' =>
																																				[
																																				  0 =>
																																				  [
																																					'type' => 'literal',
																																					'value' => 'limit doesn\'t support negative count',
																																				  ],
																																				],
																																			  ],
																																			],
																																		  ],
																																		  'rest' =>
																																		  [
																																			'type' => 'def',
																																			'name' => 'skip',
																																			'params' =>
																																			[
																																			  0 =>
																																			  [
																																				'kind' => 'value',
																																				'name' => 'n',
																																			  ],
																																			  1 =>
																																			  [
																																				'kind' => 'filter',
																																				'name' => 'expr',
																																			  ],
																																			],
																																			'body' =>
																																			[
																																			  'type' => 'if',
																																			  'cond' =>
																																			  [
																																				'type' => 'compare',
																																				'op' => '>',
																																				'left' =>
																																				[
																																				  'type' => 'variable',
																																				  'name' => 'n',
																																				],
																																				'right' =>
																																				[
																																				  'type' => 'literal',
																																				  'value' => 0,
																																				],
																																			  ],
																																			  'then' =>
																																			  [
																																				'type' => 'foreach',
																																				'src' =>
																																				[
																																				  'type' => 'call',
																																				  'name' => 'expr',
																																				  'args' =>
																																				  [
																																				  ],
																																				],
																																				'pattern' =>
																																				[
																																				  'type' => 'var_pattern',
																																				  'name' => 'item',
																																				],
																																				'init' =>
																																				[
																																				  'type' => 'variable',
																																				  'name' => 'n',
																																				],
																																				'update' =>
																																				[
																																				  'type' => 'binop',
																																				  'op' => '-',
																																				  'left' =>
																																				  [
																																					'type' => 'identity',
																																				  ],
																																				  'right' =>
																																				  [
																																					'type' => 'literal',
																																					'value' => 1,
																																				  ],
																																				],
																																				'extract' =>
																																				[
																																				  'type' => 'if',
																																				  'cond' =>
																																				  [
																																					'type' => 'compare',
																																					'op' => '<',
																																					'left' =>
																																					[
																																					  'type' => 'identity',
																																					],
																																					'right' =>
																																					[
																																					  'type' => 'literal',
																																					  'value' => 0,
																																					],
																																				  ],
																																				  'then' =>
																																				  [
																																					'type' => 'variable',
																																					'name' => 'item',
																																				  ],
																																				  'else' =>
																																				  [
																																					'type' => 'call',
																																					'name' => 'empty',
																																					'args' =>
																																					[
																																					],
																																				  ],
																																				],
																																			  ],
																																			  'else' =>
																																			  [
																																				'type' => 'if',
																																				'cond' =>
																																				[
																																				  'type' => 'compare',
																																				  'op' => '==',
																																				  'left' =>
																																				  [
																																					'type' => 'variable',
																																					'name' => 'n',
																																				  ],
																																				  'right' =>
																																				  [
																																					'type' => 'literal',
																																					'value' => 0,
																																				  ],
																																				],
																																				'then' =>
																																				[
																																				  'type' => 'call',
																																				  'name' => 'expr',
																																				  'args' =>
																																				  [
																																				  ],
																																				],
																																				'else' =>
																																				[
																																				  'type' => 'call',
																																				  'name' => 'error',
																																				  'args' =>
																																				  [
																																					0 =>
																																					[
																																					  'type' => 'literal',
																																					  'value' => 'skip doesn\'t support negative count',
																																					],
																																				  ],
																																				],
																																			  ],
																																			],
																																			'rest' =>
																																			[
																																			  'type' => 'def',
																																			  'name' => 'range',
																																			  'params' =>
																																			  [
																																				0 =>
																																				[
																																				  'kind' => 'value',
																																				  'name' => 'init',
																																				],
																																				1 =>
																																				[
																																				  'kind' => 'value',
																																				  'name' => 'upto',
																																				],
																																				2 =>
																																				[
																																				  'kind' => 'value',
																																				  'name' => 'by',
																																				],
																																			  ],
																																			  'body' =>
																																			  [
																																				'type' => 'if',
																																				'cond' =>
																																				[
																																				  'type' => 'compare',
																																				  'op' => '>',
																																				  'left' =>
																																				  [
																																					'type' => 'variable',
																																					'name' => 'by',
																																				  ],
																																				  'right' =>
																																				  [
																																					'type' => 'literal',
																																					'value' => 0,
																																				  ],
																																				],
																																				'then' =>
																																				[
																																				  'type' => 'pipe',
																																				  'left' =>
																																				  [
																																					'type' => 'variable',
																																					'name' => 'init',
																																				  ],
																																				  'right' =>
																																				  [
																																					'type' => 'call',
																																					'name' => 'while',
																																					'args' =>
																																					[
																																					  0 =>
																																					  [
																																						'type' => 'compare',
																																						'op' => '<',
																																						'left' =>
																																						[
																																						  'type' => 'identity',
																																						],
																																						'right' =>
																																						[
																																						  'type' => 'variable',
																																						  'name' => 'upto',
																																						],
																																					  ],
																																					  1 =>
																																					  [
																																						'type' => 'binop',
																																						'op' => '+',
																																						'left' =>
																																						[
																																						  'type' => 'identity',
																																						],
																																						'right' =>
																																						[
																																						  'type' => 'variable',
																																						  'name' => 'by',
																																						],
																																					  ],
																																					],
																																				  ],
																																				],
																																				'else' =>
																																				[
																																				  'type' => 'if',
																																				  'cond' =>
																																				  [
																																					'type' => 'compare',
																																					'op' => '<',
																																					'left' =>
																																					[
																																					  'type' => 'variable',
																																					  'name' => 'by',
																																					],
																																					'right' =>
																																					[
																																					  'type' => 'literal',
																																					  'value' => 0,
																																					],
																																				  ],
																																				  'then' =>
																																				  [
																																					'type' => 'pipe',
																																					'left' =>
																																					[
																																					  'type' => 'variable',
																																					  'name' => 'init',
																																					],
																																					'right' =>
																																					[
																																					  'type' => 'call',
																																					  'name' => 'while',
																																					  'args' =>
																																					  [
																																						0 =>
																																						[
																																						  'type' => 'compare',
																																						  'op' => '>',
																																						  'left' =>
																																						  [
																																							'type' => 'identity',
																																						  ],
																																						  'right' =>
																																						  [
																																							'type' => 'variable',
																																							'name' => 'upto',
																																						  ],
																																						],
																																						1 =>
																																						[
																																						  'type' => 'binop',
																																						  'op' => '+',
																																						  'left' =>
																																						  [
																																							'type' => 'identity',
																																						  ],
																																						  'right' =>
																																						  [
																																							'type' => 'variable',
																																							'name' => 'by',
																																						  ],
																																						],
																																					  ],
																																					],
																																				  ],
																																				  'else' =>
																																				  [
																																					'type' => 'call',
																																					'name' => 'empty',
																																					'args' =>
																																					[
																																					],
																																				  ],
																																				],
																																			  ],
																																			  'rest' =>
																																			  [
																																				'type' => 'def',
																																				'name' => 'first',
																																				'params' =>
																																				[
																																				  0 =>
																																				  [
																																					'kind' => 'filter',
																																					'name' => 'g',
																																				  ],
																																				],
																																				'body' =>
																																				[
																																				  'type' => 'label',
																																				  'name' => 'out',
																																				  'body' =>
																																				  [
																																					'type' => 'pipe',
																																					'left' =>
																																					[
																																					  'type' => 'call',
																																					  'name' => 'g',
																																					  'args' =>
																																					  [
																																					  ],
																																					],
																																					'right' =>
																																					[
																																					  'type' => 'comma',
																																					  'left' =>
																																					  [
																																						'type' => 'identity',
																																					  ],
																																					  'right' =>
																																					  [
																																						'type' => 'break',
																																						'name' => 'out',
																																					  ],
																																					],
																																				  ],
																																				],
																																				'rest' =>
																																				[
																																				  'type' => 'def',
																																				  'name' => 'isempty',
																																				  'params' =>
																																				  [
																																					0 =>
																																					[
																																					  'kind' => 'filter',
																																					  'name' => 'g',
																																					],
																																				  ],
																																				  'body' =>
																																				  [
																																					'type' => 'call',
																																					'name' => 'first',
																																					'args' =>
																																					[
																																					  0 =>
																																					  [
																																						'type' => 'comma',
																																						'left' =>
																																						[
																																						  'type' => 'pipe',
																																						  'left' =>
																																						  [
																																							'type' => 'call',
																																							'name' => 'g',
																																							'args' =>
																																							[
																																							],
																																						  ],
																																						  'right' =>
																																						  [
																																							'type' => 'literal',
																																							'value' => false,
																																						  ],
																																						],
																																						'right' =>
																																						[
																																						  'type' => 'literal',
																																						  'value' => true,
																																						],
																																					  ],
																																					],
																																				  ],
																																				  'rest' =>
																																				  [
																																					'type' => 'def',
																																					'name' => 'all',
																																					'params' =>
																																					[
																																					  0 =>
																																					  [
																																						'kind' => 'filter',
																																						'name' => 'generator',
																																					  ],
																																					  1 =>
																																					  [
																																						'kind' => 'filter',
																																						'name' => 'condition',
																																					  ],
																																					],
																																					'body' =>
																																					[
																																					  'type' => 'call',
																																					  'name' => 'isempty',
																																					  'args' =>
																																					  [
																																						0 =>
																																						[
																																						  'type' => 'pipe',
																																						  'left' =>
																																						  [
																																							'type' => 'call',
																																							'name' => 'generator',
																																							'args' =>
																																							[
																																							],
																																						  ],
																																						  'right' =>
																																						  [
																																							'type' => 'and',
																																							'left' =>
																																							[
																																							  'type' => 'call',
																																							  'name' => 'condition',
																																							  'args' =>
																																							  [
																																							  ],
																																							],
																																							'right' =>
																																							[
																																							  'type' => 'call',
																																							  'name' => 'empty',
																																							  'args' =>
																																							  [
																																							  ],
																																							],
																																						  ],
																																						],
																																					  ],
																																					],
																																					'rest' =>
																																					[
																																					  'type' => 'def',
																																					  'name' => 'any',
																																					  'params' =>
																																					  [
																																						0 =>
																																						[
																																						  'kind' => 'filter',
																																						  'name' => 'generator',
																																						],
																																						1 =>
																																						[
																																						  'kind' => 'filter',
																																						  'name' => 'condition',
																																						],
																																					  ],
																																					  'body' =>
																																					  [
																																						'type' => 'pipe',
																																						'left' =>
																																						[
																																						  'type' => 'call',
																																						  'name' => 'isempty',
																																						  'args' =>
																																						  [
																																							0 =>
																																							[
																																							  'type' => 'pipe',
																																							  'left' =>
																																							  [
																																								'type' => 'call',
																																								'name' => 'generator',
																																								'args' =>
																																								[
																																								],
																																							  ],
																																							  'right' =>
																																							  [
																																								'type' => 'or',
																																								'left' =>
																																								[
																																								  'type' => 'call',
																																								  'name' => 'condition',
																																								  'args' =>
																																								  [
																																								  ],
																																								],
																																								'right' =>
																																								[
																																								  'type' => 'call',
																																								  'name' => 'empty',
																																								  'args' =>
																																								  [
																																								  ],
																																								],
																																							  ],
																																							],
																																						  ],
																																						],
																																						'right' =>
																																						[
																																						  'type' => 'call',
																																						  'name' => 'not',
																																						  'args' =>
																																						  [
																																						  ],
																																						],
																																					  ],
																																					  'rest' =>
																																					  [
																																						'type' => 'def',
																																						'name' => 'all',
																																						'params' =>
																																						[
																																						  0 =>
																																						  [
																																							'kind' => 'filter',
																																							'name' => 'condition',
																																						  ],
																																						],
																																						'body' =>
																																						[
																																						  'type' => 'call',
																																						  'name' => 'all',
																																						  'args' =>
																																						  [
																																							0 =>
																																							[
																																							  'type' => 'iter',
																																							  'opt' => false,
																																							  'expr' =>
																																							  [
																																								'type' => 'identity',
																																							  ],
																																							],
																																							1 =>
																																							[
																																							  'type' => 'call',
																																							  'name' => 'condition',
																																							  'args' =>
																																							  [
																																							  ],
																																							],
																																						  ],
																																						],
																																						'rest' =>
																																						[
																																						  'type' => 'def',
																																						  'name' => 'any',
																																						  'params' =>
																																						  [
																																							0 =>
																																							[
																																							  'kind' => 'filter',
																																							  'name' => 'condition',
																																							],
																																						  ],
																																						  'body' =>
																																						  [
																																							'type' => 'call',
																																							'name' => 'any',
																																							'args' =>
																																							[
																																							  0 =>
																																							  [
																																								'type' => 'iter',
																																								'opt' => false,
																																								'expr' =>
																																								[
																																								  'type' => 'identity',
																																								],
																																							  ],
																																							  1 =>
																																							  [
																																								'type' => 'call',
																																								'name' => 'condition',
																																								'args' =>
																																								[
																																								],
																																							  ],
																																							],
																																						  ],
																																						  'rest' =>
																																						  [
																																							'type' => 'def',
																																							'name' => 'all',
																																							'params' =>
																																							[
																																							],
																																							'body' =>
																																							[
																																							  'type' => 'call',
																																							  'name' => 'all',
																																							  'args' =>
																																							  [
																																								0 =>
																																								[
																																								  'type' => 'iter',
																																								  'opt' => false,
																																								  'expr' =>
																																								  [
																																									'type' => 'identity',
																																								  ],
																																								],
																																								1 =>
																																								[
																																								  'type' => 'identity',
																																								],
																																							  ],
																																							],
																																							'rest' =>
																																							[
																																							  'type' => 'def',
																																							  'name' => 'any',
																																							  'params' =>
																																							  [
																																							  ],
																																							  'body' =>
																																							  [
																																								'type' => 'call',
																																								'name' => 'any',
																																								'args' =>
																																								[
																																								  0 =>
																																								  [
																																									'type' => 'iter',
																																									'opt' => false,
																																									'expr' =>
																																									[
																																									  'type' => 'identity',
																																									],
																																								  ],
																																								  1 =>
																																								  [
																																									'type' => 'identity',
																																								  ],
																																								],
																																							  ],
																																							  'rest' =>
																																							  [
																																								'type' => 'def',
																																								'name' => 'nth',
																																								'params' =>
																																								[
																																								  0 =>
																																								  [
																																									'kind' => 'value',
																																									'name' => 'n',
																																								  ],
																																								  1 =>
																																								  [
																																									'kind' => 'filter',
																																									'name' => 'g',
																																								  ],
																																								],
																																								'body' =>
																																								[
																																								  'type' => 'if',
																																								  'cond' =>
																																								  [
																																									'type' => 'compare',
																																									'op' => '<',
																																									'left' =>
																																									[
																																									  'type' => 'variable',
																																									  'name' => 'n',
																																									],
																																									'right' =>
																																									[
																																									  'type' => 'literal',
																																									  'value' => 0,
																																									],
																																								  ],
																																								  'then' =>
																																								  [
																																									'type' => 'call',
																																									'name' => 'error',
																																									'args' =>
																																									[
																																									  0 =>
																																									  [
																																										'type' => 'literal',
																																										'value' => 'nth doesn\'t support negative indices',
																																									  ],
																																									],
																																								  ],
																																								  'else' =>
																																								  [
																																									'type' => 'call',
																																									'name' => 'first',
																																									'args' =>
																																									[
																																									  0 =>
																																									  [
																																										'type' => 'call',
																																										'name' => 'skip',
																																										'args' =>
																																										[
																																										  0 =>
																																										  [
																																											'type' => 'variable',
																																											'name' => 'n',
																																										  ],
																																										  1 =>
																																										  [
																																											'type' => 'call',
																																											'name' => 'g',
																																											'args' =>
																																											[
																																											],
																																										  ],
																																										],
																																									  ],
																																									],
																																								  ],
																																								],
																																								'rest' =>
																																								[
																																								  'type' => 'def',
																																								  'name' => 'first',
																																								  'params' =>
																																								  [
																																								  ],
																																								  'body' =>
																																								  [
																																									'type' => 'index',
																																									'key' =>
																																									[
																																									  'type' => 'literal',
																																									  'value' => 0,
																																									],
																																									'opt' => false,
																																									'expr' =>
																																									[
																																									  'type' => 'identity',
																																									],
																																								  ],
																																								  'rest' =>
																																								  [
																																									'type' => 'def',
																																									'name' => 'last',
																																									'params' =>
																																									[
																																									],
																																									'body' =>
																																									[
																																									  'type' => 'index',
																																									  'key' =>
																																									  [
																																										'type' => 'neg',
																																										'expr' =>
																																										[
																																										  'type' => 'literal',
																																										  'value' => 1,
																																										],
																																									  ],
																																									  'opt' => false,
																																									  'expr' =>
																																									  [
																																										'type' => 'identity',
																																									  ],
																																									],
																																									'rest' =>
																																									[
																																									  'type' => 'def',
																																									  'name' => 'nth',
																																									  'params' =>
																																									  [
																																										0 =>
																																										[
																																										  'kind' => 'value',
																																										  'name' => 'n',
																																										],
																																									  ],
																																									  'body' =>
																																									  [
																																										'type' => 'index',
																																										'key' =>
																																										[
																																										  'type' => 'variable',
																																										  'name' => 'n',
																																										],
																																										'opt' => false,
																																										'expr' =>
																																										[
																																										  'type' => 'identity',
																																										],
																																									  ],
																																									  'rest' =>
																																									  [
																																										'type' => 'def',
																																										'name' => 'combinations',
																																										'params' =>
																																										[
																																										],
																																										'body' =>
																																										[
																																										  'type' => 'if',
																																										  'cond' =>
																																										  [
																																											'type' => 'compare',
																																											'op' => '==',
																																											'left' =>
																																											[
																																											  'type' => 'call',
																																											  'name' => 'length',
																																											  'args' =>
																																											  [
																																											  ],
																																											],
																																											'right' =>
																																											[
																																											  'type' => 'literal',
																																											  'value' => 0,
																																											],
																																										  ],
																																										  'then' =>
																																										  [
																																											'type' => 'array',
																																											'expr' => null,
																																										  ],
																																										  'else' =>
																																										  [
																																											'type' => 'bind',
																																											'expr' =>
																																											[
																																											  'type' => 'iter',
																																											  'opt' => false,
																																											  'expr' =>
																																											  [
																																												'type' => 'index',
																																												'key' =>
																																												[
																																												  'type' => 'literal',
																																												  'value' => 0,
																																												],
																																												'opt' => false,
																																												'expr' =>
																																												[
																																												  'type' => 'identity',
																																												],
																																											  ],
																																											],
																																											'pattern' =>
																																											[
																																											  'type' => 'var_pattern',
																																											  'name' => 'x',
																																											],
																																											'body' =>
																																											[
																																											  'type' => 'bind',
																																											  'expr' =>
																																											  [
																																												'type' => 'pipe',
																																												'left' =>
																																												[
																																												  'type' => 'slice',
																																												  'from' =>
																																												  [
																																													'type' => 'literal',
																																													'value' => 1,
																																												  ],
																																												  'to' => null,
																																												  'opt' => false,
																																												  'expr' =>
																																												  [
																																													'type' => 'identity',
																																												  ],
																																												],
																																												'right' =>
																																												[
																																												  'type' => 'call',
																																												  'name' => 'combinations',
																																												  'args' =>
																																												  [
																																												  ],
																																												],
																																											  ],
																																											  'pattern' =>
																																											  [
																																												'type' => 'var_pattern',
																																												'name' => 'y',
																																											  ],
																																											  'body' =>
																																											  [
																																												'type' => 'binop',
																																												'op' => '+',
																																												'left' =>
																																												[
																																												  'type' => 'array',
																																												  'expr' =>
																																												  [
																																													'type' => 'variable',
																																													'name' => 'x',
																																												  ],
																																												],
																																												'right' =>
																																												[
																																												  'type' => 'variable',
																																												  'name' => 'y',
																																												],
																																											  ],
																																											],
																																										  ],
																																										],
																																										'rest' =>
																																										[
																																										  'type' => 'def',
																																										  'name' => 'combinations',
																																										  'params' =>
																																										  [
																																											0 =>
																																											[
																																											  'kind' => 'filter',
																																											  'name' => 'n',
																																											],
																																										  ],
																																										  'body' =>
																																										  [
																																											'type' => 'bind',
																																											'expr' =>
																																											[
																																											  'type' => 'identity',
																																											],
																																											'pattern' =>
																																											[
																																											  'type' => 'var_pattern',
																																											  'name' => 'dot',
																																											],
																																											'body' =>
																																											[
																																											  'type' => 'pipe',
																																											  'left' =>
																																											  [
																																												'type' => 'array',
																																												'expr' =>
																																												[
																																												  'type' => 'pipe',
																																												  'left' =>
																																												  [
																																													'type' => 'call',
																																													'name' => 'range',
																																													'args' =>
																																													[
																																													  0 =>
																																													  [
																																														'type' => 'call',
																																														'name' => 'n',
																																														'args' =>
																																														[
																																														],
																																													  ],
																																													],
																																												  ],
																																												  'right' =>
																																												  [
																																													'type' => 'variable',
																																													'name' => 'dot',
																																												  ],
																																												],
																																											  ],
																																											  'right' =>
																																											  [
																																												'type' => 'call',
																																												'name' => 'combinations',
																																												'args' =>
																																												[
																																												],
																																											  ],
																																											],
																																										  ],
																																										  'rest' =>
																																										  [
																																											'type' => 'def',
																																											'name' => 'transpose',
																																											'params' =>
																																											[
																																											],
																																											'body' =>
																																											[
																																											  'type' => 'array',
																																											  'expr' =>
																																											  [
																																												'type' => 'bind',
																																												'expr' =>
																																												[
																																												  'type' => 'call',
																																												  'name' => 'range',
																																												  'args' =>
																																												  [
																																													0 =>
																																													[
																																													  'type' => 'literal',
																																													  'value' => 0,
																																													],
																																													1 =>
																																													[
																																													  'type' => 'pipe',
																																													  'left' =>
																																													  [
																																														'type' => 'call',
																																														'name' => 'map',
																																														'args' =>
																																														[
																																														  0 =>
																																														  [
																																															'type' => 'call',
																																															'name' => 'length',
																																															'args' =>
																																															[
																																															],
																																														  ],
																																														],
																																													  ],
																																													  'right' =>
																																													  [
																																														'type' => 'alternative',
																																														'left' =>
																																														[
																																														  'type' => 'call',
																																														  'name' => 'max',
																																														  'args' =>
																																														  [
																																														  ],
																																														],
																																														'right' =>
																																														[
																																														  'type' => 'literal',
																																														  'value' => 0,
																																														],
																																													  ],
																																													],
																																												  ],
																																												],
																																												'pattern' =>
																																												[
																																												  'type' => 'var_pattern',
																																												  'name' => 'i',
																																												],
																																												'body' =>
																																												[
																																												  'type' => 'array',
																																												  'expr' =>
																																												  [
																																													'type' => 'index',
																																													'key' =>
																																													[
																																													  'type' => 'variable',
																																													  'name' => 'i',
																																													],
																																													'opt' => false,
																																													'expr' =>
																																													[
																																													  'type' => 'iter',
																																													  'opt' => false,
																																													  'expr' =>
																																													  [
																																														'type' => 'identity',
																																													  ],
																																													],
																																												  ],
																																												],
																																											  ],
																																											],
																																											'rest' =>
																																											[
																																											  'type' => 'def',
																																											  'name' => 'in',
																																											  'params' =>
																																											  [
																																												0 =>
																																												[
																																												  'kind' => 'filter',
																																												  'name' => 'xs',
																																												],
																																											  ],
																																											  'body' =>
																																											  [
																																												'type' => 'bind',
																																												'expr' =>
																																												[
																																												  'type' => 'identity',
																																												],
																																												'pattern' =>
																																												[
																																												  'type' => 'var_pattern',
																																												  'name' => 'x',
																																												],
																																												'body' =>
																																												[
																																												  'type' => 'pipe',
																																												  'left' =>
																																												  [
																																													'type' => 'call',
																																													'name' => 'xs',
																																													'args' =>
																																													[
																																													],
																																												  ],
																																												  'right' =>
																																												  [
																																													'type' => 'call',
																																													'name' => 'has',
																																													'args' =>
																																													[
																																													  0 =>
																																													  [
																																														'type' => 'variable',
																																														'name' => 'x',
																																													  ],
																																													],
																																												  ],
																																												],
																																											  ],
																																											  'rest' =>
																																											  [
																																												'type' => 'def',
																																												'name' => 'inside',
																																												'params' =>
																																												[
																																												  0 =>
																																												  [
																																													'kind' => 'filter',
																																													'name' => 'xs',
																																												  ],
																																												],
																																												'body' =>
																																												[
																																												  'type' => 'bind',
																																												  'expr' =>
																																												  [
																																													'type' => 'identity',
																																												  ],
																																												  'pattern' =>
																																												  [
																																													'type' => 'var_pattern',
																																													'name' => 'x',
																																												  ],
																																												  'body' =>
																																												  [
																																													'type' => 'pipe',
																																													'left' =>
																																													[
																																													  'type' => 'call',
																																													  'name' => 'xs',
																																													  'args' =>
																																													  [
																																													  ],
																																													],
																																													'right' =>
																																													[
																																													  'type' => 'call',
																																													  'name' => 'contains',
																																													  'args' =>
																																													  [
																																														0 =>
																																														[
																																														  'type' => 'variable',
																																														  'name' => 'x',
																																														],
																																													  ],
																																													],
																																												  ],
																																												],
																																												'rest' =>
																																												[
																																												  'type' => 'def',
																																												  'name' => 'repeat',
																																												  'params' =>
																																												  [
																																													0 =>
																																													[
																																													  'kind' => 'filter',
																																													  'name' => 'exp',
																																													],
																																												  ],
																																												  'body' =>
																																												  [
																																													'type' => 'def',
																																													'name' => '_repeat',
																																													'params' =>
																																													[
																																													],
																																													'body' =>
																																													[
																																													  'type' => 'comma',
																																													  'left' =>
																																													  [
																																														'type' => 'call',
																																														'name' => 'exp',
																																														'args' =>
																																														[
																																														],
																																													  ],
																																													  'right' =>
																																													  [
																																														'type' => 'call',
																																														'name' => '_repeat',
																																														'args' =>
																																														[
																																														],
																																													  ],
																																													],
																																													'rest' =>
																																													[
																																													  'type' => 'call',
																																													  'name' => '_repeat',
																																													  'args' =>
																																													  [
																																													  ],
																																													],
																																												  ],
																																												  'rest' =>
																																												  [
																																													'type' => 'def',
																																													'name' => 'inputs',
																																													'params' =>
																																													[
																																													],
																																													'body' =>
																																													[
																																													  'type' => 'try',
																																													  'body' =>
																																													  [
																																														'type' => 'call',
																																														'name' => 'repeat',
																																														'args' =>
																																														[
																																														  0 =>
																																														  [
																																															'type' => 'call',
																																															'name' => 'input',
																																															'args' =>
																																															[
																																															],
																																														  ],
																																														],
																																													  ],
																																													  'catch' =>
																																													  [
																																														'type' => 'if',
																																														'cond' =>
																																														[
																																														  'type' => 'compare',
																																														  'op' => '==',
																																														  'left' =>
																																														  [
																																															'type' => 'identity',
																																														  ],
																																														  'right' =>
																																														  [
																																															'type' => 'literal',
																																															'value' => 'break',
																																														  ],
																																														],
																																														'then' =>
																																														[
																																														  'type' => 'call',
																																														  'name' => 'empty',
																																														  'args' =>
																																														  [
																																														  ],
																																														],
																																														'else' =>
																																														[
																																														  'type' => 'call',
																																														  'name' => 'error',
																																														  'args' =>
																																														  [
																																														  ],
																																														],
																																													  ],
																																													],
																																													'rest' =>
																																													[
																																													  'type' => 'def',
																																													  'name' => 'ascii_downcase',
																																													  'params' =>
																																													  [
																																													  ],
																																													  'body' =>
																																													  [
																																														'type' => 'pipe',
																																														'left' =>
																																														[
																																														  'type' => 'call',
																																														  'name' => 'explode',
																																														  'args' =>
																																														  [
																																														  ],
																																														],
																																														'right' =>
																																														[
																																														  'type' => 'pipe',
																																														  'left' =>
																																														  [
																																															'type' => 'call',
																																															'name' => 'map',
																																															'args' =>
																																															[
																																															  0 =>
																																															  [
																																																'type' => 'if',
																																																'cond' =>
																																																[
																																																  'type' => 'and',
																																																  'left' =>
																																																  [
																																																	'type' => 'compare',
																																																	'op' => '<=',
																																																	'left' =>
																																																	[
																																																	  'type' => 'literal',
																																																	  'value' => 65,
																																																	],
																																																	'right' =>
																																																	[
																																																	  'type' => 'identity',
																																																	],
																																																  ],
																																																  'right' =>
																																																  [
																																																	'type' => 'compare',
																																																	'op' => '<=',
																																																	'left' =>
																																																	[
																																																	  'type' => 'identity',
																																																	],
																																																	'right' =>
																																																	[
																																																	  'type' => 'literal',
																																																	  'value' => 90,
																																																	],
																																																  ],
																																																],
																																																'then' =>
																																																[
																																																  'type' => 'binop',
																																																  'op' => '+',
																																																  'left' =>
																																																  [
																																																	'type' => 'identity',
																																																  ],
																																																  'right' =>
																																																  [
																																																	'type' => 'literal',
																																																	'value' => 32,
																																																  ],
																																																],
																																																'else' =>
																																																[
																																																  'type' => 'identity',
																																																],
																																															  ],
																																															],
																																														  ],
																																														  'right' =>
																																														  [
																																															'type' => 'call',
																																															'name' => 'implode',
																																															'args' =>
																																															[
																																															],
																																														  ],
																																														],
																																													  ],
																																													  'rest' =>
																																													  [
																																														'type' => 'def',
																																														'name' => 'ascii_upcase',
																																														'params' =>
																																														[
																																														],
																																														'body' =>
																																														[
																																														  'type' => 'pipe',
																																														  'left' =>
																																														  [
																																															'type' => 'call',
																																															'name' => 'explode',
																																															'args' =>
																																															[
																																															],
																																														  ],
																																														  'right' =>
																																														  [
																																															'type' => 'pipe',
																																															'left' =>
																																															[
																																															  'type' => 'call',
																																															  'name' => 'map',
																																															  'args' =>
																																															  [
																																																0 =>
																																																[
																																																  'type' => 'if',
																																																  'cond' =>
																																																  [
																																																	'type' => 'and',
																																																	'left' =>
																																																	[
																																																	  'type' => 'compare',
																																																	  'op' => '<=',
																																																	  'left' =>
																																																	  [
																																																		'type' => 'literal',
																																																		'value' => 97,
																																																	  ],
																																																	  'right' =>
																																																	  [
																																																		'type' => 'identity',
																																																	  ],
																																																	],
																																																	'right' =>
																																																	[
																																																	  'type' => 'compare',
																																																	  'op' => '<=',
																																																	  'left' =>
																																																	  [
																																																		'type' => 'identity',
																																																	  ],
																																																	  'right' =>
																																																	  [
																																																		'type' => 'literal',
																																																		'value' => 122,
																																																	  ],
																																																	],
																																																  ],
																																																  'then' =>
																																																  [
																																																	'type' => 'binop',
																																																	'op' => '-',
																																																	'left' =>
																																																	[
																																																	  'type' => 'identity',
																																																	],
																																																	'right' =>
																																																	[
																																																	  'type' => 'literal',
																																																	  'value' => 32,
																																																	],
																																																  ],
																																																  'else' =>
																																																  [
																																																	'type' => 'identity',
																																																  ],
																																																],
																																															  ],
																																															],
																																															'right' =>
																																															[
																																															  'type' => 'call',
																																															  'name' => 'implode',
																																															  'args' =>
																																															  [
																																															  ],
																																															],
																																														  ],
																																														],
																																														'rest' =>
																																														[
																																														  'type' => 'def',
																																														  'name' => 'truncate_stream',
																																														  'params' =>
																																														  [
																																															0 =>
																																															[
																																															  'kind' => 'filter',
																																															  'name' => 'stream',
																																															],
																																														  ],
																																														  'body' =>
																																														  [
																																															'type' => 'bind',
																																															'expr' =>
																																															[
																																															  'type' => 'identity',
																																															],
																																															'pattern' =>
																																															[
																																															  'type' => 'var_pattern',
																																															  'name' => 'n',
																																															],
																																															'body' =>
																																															[
																																															  'type' => 'pipe',
																																															  'left' =>
																																															  [
																																																'type' => 'literal',
																																																'value' => null,
																																															  ],
																																															  'right' =>
																																															  [
																																																'type' => 'pipe',
																																																'left' =>
																																																[
																																																  'type' => 'call',
																																																  'name' => 'stream',
																																																  'args' =>
																																																  [
																																																  ],
																																																],
																																																'right' =>
																																																[
																																																  'type' => 'bind',
																																																  'expr' =>
																																																  [
																																																	'type' => 'identity',
																																																  ],
																																																  'pattern' =>
																																																  [
																																																	'type' => 'var_pattern',
																																																	'name' => 'input',
																																																  ],
																																																  'body' =>
																																																  [
																																																	'type' => 'if',
																																																	'cond' =>
																																																	[
																																																	  'type' => 'compare',
																																																	  'op' => '>',
																																																	  'left' =>
																																																	  [
																																																		'type' => 'pipe',
																																																		'left' =>
																																																		[
																																																		  'type' => 'index',
																																																		  'key' =>
																																																		  [
																																																			'type' => 'literal',
																																																			'value' => 0,
																																																		  ],
																																																		  'opt' => false,
																																																		  'expr' =>
																																																		  [
																																																			'type' => 'identity',
																																																		  ],
																																																		],
																																																		'right' =>
																																																		[
																																																		  'type' => 'call',
																																																		  'name' => 'length',
																																																		  'args' =>
																																																		  [
																																																		  ],
																																																		],
																																																	  ],
																																																	  'right' =>
																																																	  [
																																																		'type' => 'variable',
																																																		'name' => 'n',
																																																	  ],
																																																	],
																																																	'then' =>
																																																	[
																																																	  'type' => 'call',
																																																	  'name' => 'setpath',
																																																	  'args' =>
																																																	  [
																																																		0 =>
																																																		[
																																																		  'type' => 'array',
																																																		  'expr' =>
																																																		  [
																																																			'type' => 'literal',
																																																			'value' => 0,
																																																		  ],
																																																		],
																																																		1 =>
																																																		[
																																																		  'type' => 'slice',
																																																		  'from' =>
																																																		  [
																																																			'type' => 'variable',
																																																			'name' => 'n',
																																																		  ],
																																																		  'to' => null,
																																																		  'opt' => false,
																																																		  'expr' =>
																																																		  [
																																																			'type' => 'index',
																																																			'key' =>
																																																			[
																																																			  'type' => 'literal',
																																																			  'value' => 0,
																																																			],
																																																			'opt' => false,
																																																			'expr' =>
																																																			[
																																																			  'type' => 'variable',
																																																			  'name' => 'input',
																																																			],
																																																		  ],
																																																		],
																																																	  ],
																																																	],
																																																	'else' =>
																																																	[
																																																	  'type' => 'call',
																																																	  'name' => 'empty',
																																																	  'args' =>
																																																	  [
																																																	  ],
																																																	],
																																																  ],
																																																],
																																															  ],
																																															],
																																														  ],
																																														  'rest' =>
																																														  [
																																															'type' => 'def',
																																															'name' => 'fromstream',
																																															'params' =>
																																															[
																																															  0 =>
																																															  [
																																																'kind' => 'filter',
																																																'name' => 'i',
																																															  ],
																																															],
																																															'body' =>
																																															[
																																															  'type' => 'bind',
																																															  'expr' =>
																																															  [
																																																'type' => 'object',
																																																'pairs' =>
																																																[
																																																  0 =>
																																																  [
																																																	'key' =>
																																																	[
																																																	  'type' => 'literal',
																																																	  'value' => 'x',
																																																	],
																																																	'value' =>
																																																	[
																																																	  'type' => 'literal',
																																																	  'value' => null,
																																																	],
																																																  ],
																																																  1 =>
																																																  [
																																																	'key' =>
																																																	[
																																																	  'type' => 'literal',
																																																	  'value' => 'e',
																																																	],
																																																	'value' =>
																																																	[
																																																	  'type' => 'literal',
																																																	  'value' => false,
																																																	],
																																																  ],
																																																],
																																															  ],
																																															  'pattern' =>
																																															  [
																																																'type' => 'var_pattern',
																																																'name' => 'init',
																																															  ],
																																															  'body' =>
																																															  [
																																																'type' => 'foreach',
																																																'src' =>
																																																[
																																																  'type' => 'call',
																																																  'name' => 'i',
																																																  'args' =>
																																																  [
																																																  ],
																																																],
																																																'pattern' =>
																																																[
																																																  'type' => 'var_pattern',
																																																  'name' => 'i',
																																																],
																																																'init' =>
																																																[
																																																  'type' => 'variable',
																																																  'name' => 'init',
																																																],
																																																'update' =>
																																																[
																																																  'type' => 'pipe',
																																																  'left' =>
																																																  [
																																																	'type' => 'if',
																																																	'cond' =>
																																																	[
																																																	  'type' => 'field',
																																																	  'expr' =>
																																																	  [
																																																		'type' => 'identity',
																																																	  ],
																																																	  'name' => 'e',
																																																	  'opt' => false,
																																																	],
																																																	'then' =>
																																																	[
																																																	  'type' => 'variable',
																																																	  'name' => 'init',
																																																	],
																																																	'else' =>
																																																	[
																																																	  'type' => 'identity',
																																																	],
																																																  ],
																																																  'right' =>
																																																  [
																																																	'type' => 'if',
																																																	'cond' =>
																																																	[
																																																	  'type' => 'pipe',
																																																	  'left' =>
																																																	  [
																																																		'type' => 'variable',
																																																		'name' => 'i',
																																																	  ],
																																																	  'right' =>
																																																	  [
																																																		'type' => 'compare',
																																																		'op' => '==',
																																																		'left' =>
																																																		[
																																																		  'type' => 'call',
																																																		  'name' => 'length',
																																																		  'args' =>
																																																		  [
																																																		  ],
																																																		],
																																																		'right' =>
																																																		[
																																																		  'type' => 'literal',
																																																		  'value' => 2,
																																																		],
																																																	  ],
																																																	],
																																																	'then' =>
																																																	[
																																																	  'type' => 'pipe',
																																																	  'left' =>
																																																	  [
																																																		'type' => 'call',
																																																		'name' => 'setpath',
																																																		'args' =>
																																																		[
																																																		  0 =>
																																																		  [
																																																			'type' => 'array',
																																																			'expr' =>
																																																			[
																																																			  'type' => 'literal',
																																																			  'value' => 'e',
																																																			],
																																																		  ],
																																																		  1 =>
																																																		  [
																																																			'type' => 'pipe',
																																																			'left' =>
																																																			[
																																																			  'type' => 'index',
																																																			  'key' =>
																																																			  [
																																																				'type' => 'literal',
																																																				'value' => 0,
																																																			  ],
																																																			  'opt' => false,
																																																			  'expr' =>
																																																			  [
																																																				'type' => 'variable',
																																																				'name' => 'i',
																																																			  ],
																																																			],
																																																			'right' =>
																																																			[
																																																			  'type' => 'compare',
																																																			  'op' => '==',
																																																			  'left' =>
																																																			  [
																																																				'type' => 'call',
																																																				'name' => 'length',
																																																				'args' =>
																																																				[
																																																				],
																																																			  ],
																																																			  'right' =>
																																																			  [
																																																				'type' => 'literal',
																																																				'value' => 0,
																																																			  ],
																																																			],
																																																		  ],
																																																		],
																																																	  ],
																																																	  'right' =>
																																																	  [
																																																		'type' => 'call',
																																																		'name' => 'setpath',
																																																		'args' =>
																																																		[
																																																		  0 =>
																																																		  [
																																																			'type' => 'binop',
																																																			'op' => '+',
																																																			'left' =>
																																																			[
																																																			  'type' => 'array',
																																																			  'expr' =>
																																																			  [
																																																				'type' => 'literal',
																																																				'value' => 'x',
																																																			  ],
																																																			],
																																																			'right' =>
																																																			[
																																																			  'type' => 'index',
																																																			  'key' =>
																																																			  [
																																																				'type' => 'literal',
																																																				'value' => 0,
																																																			  ],
																																																			  'opt' => false,
																																																			  'expr' =>
																																																			  [
																																																				'type' => 'variable',
																																																				'name' => 'i',
																																																			  ],
																																																			],
																																																		  ],
																																																		  1 =>
																																																		  [
																																																			'type' => 'index',
																																																			'key' =>
																																																			[
																																																			  'type' => 'literal',
																																																			  'value' => 1,
																																																			],
																																																			'opt' => false,
																																																			'expr' =>
																																																			[
																																																			  'type' => 'variable',
																																																			  'name' => 'i',
																																																			],
																																																		  ],
																																																		],
																																																	  ],
																																																	],
																																																	'else' =>
																																																	[
																																																	  'type' => 'call',
																																																	  'name' => 'setpath',
																																																	  'args' =>
																																																	  [
																																																		0 =>
																																																		[
																																																		  'type' => 'array',
																																																		  'expr' =>
																																																		  [
																																																			'type' => 'literal',
																																																			'value' => 'e',
																																																		  ],
																																																		],
																																																		1 =>
																																																		[
																																																		  'type' => 'pipe',
																																																		  'left' =>
																																																		  [
																																																			'type' => 'index',
																																																			'key' =>
																																																			[
																																																			  'type' => 'literal',
																																																			  'value' => 0,
																																																			],
																																																			'opt' => false,
																																																			'expr' =>
																																																			[
																																																			  'type' => 'variable',
																																																			  'name' => 'i',
																																																			],
																																																		  ],
																																																		  'right' =>
																																																		  [
																																																			'type' => 'compare',
																																																			'op' => '==',
																																																			'left' =>
																																																			[
																																																			  'type' => 'call',
																																																			  'name' => 'length',
																																																			  'args' =>
																																																			  [
																																																			  ],
																																																			],
																																																			'right' =>
																																																			[
																																																			  'type' => 'literal',
																																																			  'value' => 1,
																																																			],
																																																		  ],
																																																		],
																																																	  ],
																																																	],
																																																  ],
																																																],
																																																'extract' =>
																																																[
																																																  'type' => 'if',
																																																  'cond' =>
																																																  [
																																																	'type' => 'field',
																																																	'expr' =>
																																																	[
																																																	  'type' => 'identity',
																																																	],
																																																	'name' => 'e',
																																																	'opt' => false,
																																																  ],
																																																  'then' =>
																																																  [
																																																	'type' => 'field',
																																																	'expr' =>
																																																	[
																																																	  'type' => 'identity',
																																																	],
																																																	'name' => 'x',
																																																	'opt' => false,
																																																  ],
																																																  'else' =>
																																																  [
																																																	'type' => 'call',
																																																	'name' => 'empty',
																																																	'args' =>
																																																	[
																																																	],
																																																  ],
																																																],
																																															  ],
																																															],
																																															'rest' =>
																																															[
																																															  'type' => 'def',
																																															  'name' => 'tostream',
																																															  'params' =>
																																															  [
																																															  ],
																																															  'body' =>
																																															  [
																																																'type' => 'bind',
																																																'expr' =>
																																																[
																																																  'type' => 'call',
																																																  'name' => 'path',
																																																  'args' =>
																																																  [
																																																	0 =>
																																																	[
																																																	  'type' => 'def',
																																																	  'name' => 'r',
																																																	  'params' =>
																																																	  [
																																																	  ],
																																																	  'body' =>
																																																	  [
																																																		'type' => 'comma',
																																																		'left' =>
																																																		[
																																																		  'type' => 'pipe',
																																																		  'left' =>
																																																		  [
																																																			'type' => 'iter',
																																																			'opt' => true,
																																																			'expr' =>
																																																			[
																																																			  'type' => 'identity',
																																																			],
																																																		  ],
																																																		  'right' =>
																																																		  [
																																																			'type' => 'call',
																																																			'name' => 'r',
																																																			'args' =>
																																																			[
																																																			],
																																																		  ],
																																																		],
																																																		'right' =>
																																																		[
																																																		  'type' => 'identity',
																																																		],
																																																	  ],
																																																	  'rest' =>
																																																	  [
																																																		'type' => 'call',
																																																		'name' => 'r',
																																																		'args' =>
																																																		[
																																																		],
																																																	  ],
																																																	],
																																																  ],
																																																],
																																																'pattern' =>
																																																[
																																																  'type' => 'var_pattern',
																																																  'name' => 'p',
																																																],
																																																'body' =>
																																																[
																																																  'type' => 'pipe',
																																																  'left' =>
																																																  [
																																																	'type' => 'call',
																																																	'name' => 'getpath',
																																																	'args' =>
																																																	[
																																																	  0 =>
																																																	  [
																																																		'type' => 'variable',
																																																		'name' => 'p',
																																																	  ],
																																																	],
																																																  ],
																																																  'right' =>
																																																  [
																																																	'type' => 'reduce',
																																																	'src' =>
																																																	[
																																																	  'type' => 'call',
																																																	  'name' => 'path',
																																																	  'args' =>
																																																	  [
																																																		0 =>
																																																		[
																																																		  'type' => 'iter',
																																																		  'opt' => true,
																																																		  'expr' =>
																																																		  [
																																																			'type' => 'identity',
																																																		  ],
																																																		],
																																																	  ],
																																																	],
																																																	'pattern' =>
																																																	[
																																																	  'type' => 'var_pattern',
																																																	  'name' => 'q',
																																																	],
																																																	'init' =>
																																																	[
																																																	  'type' => 'array',
																																																	  'expr' =>
																																																	  [
																																																		'type' => 'comma',
																																																		'left' =>
																																																		[
																																																		  'type' => 'variable',
																																																		  'name' => 'p',
																																																		],
																																																		'right' =>
																																																		[
																																																		  'type' => 'identity',
																																																		],
																																																	  ],
																																																	],
																																																	'update' =>
																																																	[
																																																	  'type' => 'array',
																																																	  'expr' =>
																																																	  [
																																																		'type' => 'binop',
																																																		'op' => '+',
																																																		'left' =>
																																																		[
																																																		  'type' => 'variable',
																																																		  'name' => 'p',
																																																		],
																																																		'right' =>
																																																		[
																																																		  'type' => 'variable',
																																																		  'name' => 'q',
																																																		],
																																																	  ],
																																																	],
																																																  ],
																																																],
																																															  ],
																																															  'rest' =>
																																															  [
																																																'type' => 'def',
																																																'name' => 'walk',
																																																'params' =>
																																																[
																																																  0 =>
																																																  [
																																																	'kind' => 'filter',
																																																	'name' => 'f',
																																																  ],
																																																],
																																																'body' =>
																																																[
																																																  'type' => 'def',
																																																  'name' => 'w',
																																																  'params' =>
																																																  [
																																																  ],
																																																  'body' =>
																																																  [
																																																	'type' => 'pipe',
																																																	'left' =>
																																																	[
																																																	  'type' => 'if',
																																																	  'cond' =>
																																																	  [
																																																		'type' => 'compare',
																																																		'op' => '==',
																																																		'left' =>
																																																		[
																																																		  'type' => 'call',
																																																		  'name' => 'type',
																																																		  'args' =>
																																																		  [
																																																		  ],
																																																		],
																																																		'right' =>
																																																		[
																																																		  'type' => 'literal',
																																																		  'value' => 'object',
																																																		],
																																																	  ],
																																																	  'then' =>
																																																	  [
																																																		'type' => 'call',
																																																		'name' => 'map_values',
																																																		'args' =>
																																																		[
																																																		  0 =>
																																																		  [
																																																			'type' => 'call',
																																																			'name' => 'w',
																																																			'args' =>
																																																			[
																																																			],
																																																		  ],
																																																		],
																																																	  ],
																																																	  'else' =>
																																																	  [
																																																		'type' => 'if',
																																																		'cond' =>
																																																		[
																																																		  'type' => 'compare',
																																																		  'op' => '==',
																																																		  'left' =>
																																																		  [
																																																			'type' => 'call',
																																																			'name' => 'type',
																																																			'args' =>
																																																			[
																																																			],
																																																		  ],
																																																		  'right' =>
																																																		  [
																																																			'type' => 'literal',
																																																			'value' => 'array',
																																																		  ],
																																																		],
																																																		'then' =>
																																																		[
																																																		  'type' => 'call',
																																																		  'name' => 'map',
																																																		  'args' =>
																																																		  [
																																																			0 =>
																																																			[
																																																			  'type' => 'call',
																																																			  'name' => 'w',
																																																			  'args' =>
																																																			  [
																																																			  ],
																																																			],
																																																		  ],
																																																		],
																																																		'else' =>
																																																		[
																																																		  'type' => 'identity',
																																																		],
																																																	  ],
																																																	],
																																																	'right' =>
																																																	[
																																																	  'type' => 'call',
																																																	  'name' => 'f',
																																																	  'args' =>
																																																	  [
																																																	  ],
																																																	],
																																																  ],
																																																  'rest' =>
																																																  [
																																																	'type' => 'call',
																																																	'name' => 'w',
																																																	'args' =>
																																																	[
																																																	],
																																																  ],
																																																],
																																																'rest' =>
																																																[
																																																  'type' => 'def',
																																																  'name' => 'pick',
																																																  'params' =>
																																																  [
																																																	0 =>
																																																	[
																																																	  'kind' => 'filter',
																																																	  'name' => 'pathexps',
																																																	],
																																																  ],
																																																  'body' =>
																																																  [
																																																	'type' => 'bind',
																																																	'expr' =>
																																																	[
																																																	  'type' => 'identity',
																																																	],
																																																	'pattern' =>
																																																	[
																																																	  'type' => 'var_pattern',
																																																	  'name' => 'in',
																																																	],
																																																	'body' =>
																																																	[
																																																	  'type' => 'reduce',
																																																	  'src' =>
																																																	  [
																																																		'type' => 'call',
																																																		'name' => 'path',
																																																		'args' =>
																																																		[
																																																		  0 =>
																																																		  [
																																																			'type' => 'call',
																																																			'name' => 'pathexps',
																																																			'args' =>
																																																			[
																																																			],
																																																		  ],
																																																		],
																																																	  ],
																																																	  'pattern' =>
																																																	  [
																																																		'type' => 'var_pattern',
																																																		'name' => 'a',
																																																	  ],
																																																	  'init' =>
																																																	  [
																																																		'type' => 'literal',
																																																		'value' => null,
																																																	  ],
																																																	  'update' =>
																																																	  [
																																																		'type' => 'call',
																																																		'name' => 'setpath',
																																																		'args' =>
																																																		[
																																																		  0 =>
																																																		  [
																																																			'type' => 'variable',
																																																			'name' => 'a',
																																																		  ],
																																																		  1 =>
																																																		  [
																																																			'type' => 'pipe',
																																																			'left' =>
																																																			[
																																																			  'type' => 'variable',
																																																			  'name' => 'in',
																																																			],
																																																			'right' =>
																																																			[
																																																			  'type' => 'call',
																																																			  'name' => 'getpath',
																																																			  'args' =>
																																																			  [
																																																				0 =>
																																																				[
																																																				  'type' => 'variable',
																																																				  'name' => 'a',
																																																				],
																																																			  ],
																																																			],
																																																		  ],
																																																		],
																																																	  ],
																																																	],
																																																  ],
																																																  'rest' =>
																																																  [
																																																	'type' => 'def',
																																																	'name' => 'debug',
																																																	'params' =>
																																																	[
																																																	  0 =>
																																																	  [
																																																		'kind' => 'filter',
																																																		'name' => 'msgs',
																																																	  ],
																																																	],
																																																	'body' =>
																																																	[
																																																	  'type' => 'comma',
																																																	  'left' =>
																																																	  [
																																																		'type' => 'pipe',
																																																		'left' =>
																																																		[
																																																		  'type' => 'call',
																																																		  'name' => 'msgs',
																																																		  'args' =>
																																																		  [
																																																		  ],
																																																		],
																																																		'right' =>
																																																		[
																																																		  'type' => 'pipe',
																																																		  'left' =>
																																																		  [
																																																			'type' => 'call',
																																																			'name' => 'debug',
																																																			'args' =>
																																																			[
																																																			],
																																																		  ],
																																																		  'right' =>
																																																		  [
																																																			'type' => 'call',
																																																			'name' => 'empty',
																																																			'args' =>
																																																			[
																																																			],
																																																		  ],
																																																		],
																																																	  ],
																																																	  'right' =>
																																																	  [
																																																		'type' => 'identity',
																																																	  ],
																																																	],
																																																	'rest' =>
																																																	[
																																																	  'type' => 'def',
																																																	  'name' => 'INDEX',
																																																	  'params' =>
																																																	  [
																																																		0 =>
																																																		[
																																																		  'kind' => 'filter',
																																																		  'name' => 'stream',
																																																		],
																																																		1 =>
																																																		[
																																																		  'kind' => 'filter',
																																																		  'name' => 'idx_expr',
																																																		],
																																																	  ],
																																																	  'body' =>
																																																	  [
																																																		'type' => 'reduce',
																																																		'src' =>
																																																		[
																																																		  'type' => 'call',
																																																		  'name' => 'stream',
																																																		  'args' =>
																																																		  [
																																																		  ],
																																																		],
																																																		'pattern' =>
																																																		[
																																																		  'type' => 'var_pattern',
																																																		  'name' => 'row',
																																																		],
																																																		'init' =>
																																																		[
																																																		  'type' => 'object',
																																																		  'pairs' =>
																																																		  [
																																																		  ],
																																																		],
																																																		'update' =>
																																																		[
																																																		  'type' => 'assign',
																																																		  'op' => '=',
																																																		  'left' =>
																																																		  [
																																																			'type' => 'index',
																																																			'key' =>
																																																			[
																																																			  'type' => 'pipe',
																																																			  'left' =>
																																																			  [
																																																				'type' => 'variable',
																																																				'name' => 'row',
																																																			  ],
																																																			  'right' =>
																																																			  [
																																																				'type' => 'pipe',
																																																				'left' =>
																																																				[
																																																				  'type' => 'call',
																																																				  'name' => 'idx_expr',
																																																				  'args' =>
																																																				  [
																																																				  ],
																																																				],
																																																				'right' =>
																																																				[
																																																				  'type' => 'call',
																																																				  'name' => 'tostring',
																																																				  'args' =>
																																																				  [
																																																				  ],
																																																				],
																																																			  ],
																																																			],
																																																			'opt' => false,
																																																			'expr' =>
																																																			[
																																																			  'type' => 'identity',
																																																			],
																																																		  ],
																																																		  'right' =>
																																																		  [
																																																			'type' => 'variable',
																																																			'name' => 'row',
																																																		  ],
																																																		],
																																																	  ],
																																																	  'rest' =>
																																																	  [
																																																		'type' => 'def',
																																																		'name' => 'INDEX',
																																																		'params' =>
																																																		[
																																																		  0 =>
																																																		  [
																																																			'kind' => 'filter',
																																																			'name' => 'idx_expr',
																																																		  ],
																																																		],
																																																		'body' =>
																																																		[
																																																		  'type' => 'call',
																																																		  'name' => 'INDEX',
																																																		  'args' =>
																																																		  [
																																																			0 =>
																																																			[
																																																			  'type' => 'iter',
																																																			  'opt' => false,
																																																			  'expr' =>
																																																			  [
																																																				'type' => 'identity',
																																																			  ],
																																																			],
																																																			1 =>
																																																			[
																																																			  'type' => 'call',
																																																			  'name' => 'idx_expr',
																																																			  'args' =>
																																																			  [
																																																			  ],
																																																			],
																																																		  ],
																																																		],
																																																		'rest' =>
																																																		[
																																																		  'type' => 'def',
																																																		  'name' => 'JOIN',
																																																		  'params' =>
																																																		  [
																																																			0 =>
																																																			[
																																																			  'kind' => 'value',
																																																			  'name' => 'idx',
																																																			],
																																																			1 =>
																																																			[
																																																			  'kind' => 'filter',
																																																			  'name' => 'idx_expr',
																																																			],
																																																		  ],
																																																		  'body' =>
																																																		  [
																																																			'type' => 'array',
																																																			'expr' =>
																																																			[
																																																			  'type' => 'pipe',
																																																			  'left' =>
																																																			  [
																																																				'type' => 'iter',
																																																				'opt' => false,
																																																				'expr' =>
																																																				[
																																																				  'type' => 'identity',
																																																				],
																																																			  ],
																																																			  'right' =>
																																																			  [
																																																				'type' => 'array',
																																																				'expr' =>
																																																				[
																																																				  'type' => 'comma',
																																																				  'left' =>
																																																				  [
																																																					'type' => 'identity',
																																																				  ],
																																																				  'right' =>
																																																				  [
																																																					'type' => 'index',
																																																					'key' =>
																																																					[
																																																					  'type' => 'call',
																																																					  'name' => 'idx_expr',
																																																					  'args' =>
																																																					  [
																																																					  ],
																																																					],
																																																					'opt' => false,
																																																					'expr' =>
																																																					[
																																																					  'type' => 'variable',
																																																					  'name' => 'idx',
																																																					],
																																																				  ],
																																																				],
																																																			  ],
																																																			],
																																																		  ],
																																																		  'rest' =>
																																																		  [
																																																			'type' => 'def',
																																																			'name' => 'JOIN',
																																																			'params' =>
																																																			[
																																																			  0 =>
																																																			  [
																																																				'kind' => 'value',
																																																				'name' => 'idx',
																																																			  ],
																																																			  1 =>
																																																			  [
																																																				'kind' => 'filter',
																																																				'name' => 'stream',
																																																			  ],
																																																			  2 =>
																																																			  [
																																																				'kind' => 'filter',
																																																				'name' => 'idx_expr',
																																																			  ],
																																																			],
																																																			'body' =>
																																																			[
																																																			  'type' => 'pipe',
																																																			  'left' =>
																																																			  [
																																																				'type' => 'call',
																																																				'name' => 'stream',
																																																				'args' =>
																																																				[
																																																				],
																																																			  ],
																																																			  'right' =>
																																																			  [
																																																				'type' => 'array',
																																																				'expr' =>
																																																				[
																																																				  'type' => 'comma',
																																																				  'left' =>
																																																				  [
																																																					'type' => 'identity',
																																																				  ],
																																																				  'right' =>
																																																				  [
																																																					'type' => 'index',
																																																					'key' =>
																																																					[
																																																					  'type' => 'call',
																																																					  'name' => 'idx_expr',
																																																					  'args' =>
																																																					  [
																																																					  ],
																																																					],
																																																					'opt' => false,
																																																					'expr' =>
																																																					[
																																																					  'type' => 'variable',
																																																					  'name' => 'idx',
																																																					],
																																																				  ],
																																																				],
																																																			  ],
																																																			],
																																																			'rest' =>
																																																			[
																																																			  'type' => 'def',
																																																			  'name' => 'JOIN',
																																																			  'params' =>
																																																			  [
																																																				0 =>
																																																				[
																																																				  'kind' => 'value',
																																																				  'name' => 'idx',
																																																				],
																																																				1 =>
																																																				[
																																																				  'kind' => 'filter',
																																																				  'name' => 'stream',
																																																				],
																																																				2 =>
																																																				[
																																																				  'kind' => 'filter',
																																																				  'name' => 'idx_expr',
																																																				],
																																																				3 =>
																																																				[
																																																				  'kind' => 'filter',
																																																				  'name' => 'join_expr',
																																																				],
																																																			  ],
																																																			  'body' =>
																																																			  [
																																																				'type' => 'pipe',
																																																				'left' =>
																																																				[
																																																				  'type' => 'call',
																																																				  'name' => 'stream',
																																																				  'args' =>
																																																				  [
																																																				  ],
																																																				],
																																																				'right' =>
																																																				[
																																																				  'type' => 'pipe',
																																																				  'left' =>
																																																				  [
																																																					'type' => 'array',
																																																					'expr' =>
																																																					[
																																																					  'type' => 'comma',
																																																					  'left' =>
																																																					  [
																																																						'type' => 'identity',
																																																					  ],
																																																					  'right' =>
																																																					  [
																																																						'type' => 'index',
																																																						'key' =>
																																																						[
																																																						  'type' => 'call',
																																																						  'name' => 'idx_expr',
																																																						  'args' =>
																																																						  [
																																																						  ],
																																																						],
																																																						'opt' => false,
																																																						'expr' =>
																																																						[
																																																						  'type' => 'variable',
																																																						  'name' => 'idx',
																																																						],
																																																					  ],
																																																					],
																																																				  ],
																																																				  'right' =>
																																																				  [
																																																					'type' => 'call',
																																																					'name' => 'join_expr',
																																																					'args' =>
																																																					[
																																																					],
																																																				  ],
																																																				],
																																																			  ],
																																																			  'rest' =>
																																																			  [
																																																				'type' => 'def',
																																																				'name' => 'IN',
																																																				'params' =>
																																																				[
																																																				  0 =>
																																																				  [
																																																					'kind' => 'filter',
																																																					'name' => 's',
																																																				  ],
																																																				],
																																																				'body' =>
																																																				[
																																																				  'type' => 'call',
																																																				  'name' => 'any',
																																																				  'args' =>
																																																				  [
																																																					0 =>
																																																					[
																																																					  'type' => 'compare',
																																																					  'op' => '==',
																																																					  'left' =>
																																																					  [
																																																						'type' => 'call',
																																																						'name' => 's',
																																																						'args' =>
																																																						[
																																																						],
																																																					  ],
																																																					  'right' =>
																																																					  [
																																																						'type' => 'identity',
																																																					  ],
																																																					],
																																																					1 =>
																																																					[
																																																					  'type' => 'identity',
																																																					],
																																																				  ],
																																																				],
																																																				'rest' =>
																																																				[
																																																				  'type' => 'def',
																																																				  'name' => 'IN',
																																																				  'params' =>
																																																				  [
																																																					0 =>
																																																					[
																																																					  'kind' => 'filter',
																																																					  'name' => 'src',
																																																					],
																																																					1 =>
																																																					[
																																																					  'kind' => 'filter',
																																																					  'name' => 's',
																																																					],
																																																				  ],
																																																				  'body' =>
																																																				  [
																																																					'type' => 'call',
																																																					'name' => 'any',
																																																					'args' =>
																																																					[
																																																					  0 =>
																																																					  [
																																																						'type' => 'compare',
																																																						'op' => '==',
																																																						'left' =>
																																																						[
																																																						  'type' => 'call',
																																																						  'name' => 'src',
																																																						  'args' =>
																																																						  [
																																																						  ],
																																																						],
																																																						'right' =>
																																																						[
																																																						  'type' => 'call',
																																																						  'name' => 's',
																																																						  'args' =>
																																																						  [
																																																						  ],
																																																						],
																																																					  ],
																																																					  1 =>
																																																					  [
																																																						'type' => 'identity',
																																																					  ],
																																																					],
																																																				  ],
																																																				  'rest' =>
																																																				  [
																																																					'type' => 'variable',
																																																					'name' => '__env__',
																																																				  ],
																																																				],
																																																			  ],
																																																			],
																																																		  ],
																																																		],
																																																	  ],
																																																	],
																																																  ],
																																																],
																																															  ],
																																															],
																																														  ],
																																														],
																																													  ],
																																													],
																																												  ],
																																												],
																																											  ],
																																											],
																																										  ],
																																										],
																																									  ],
																																									],
																																								  ],
																																								],
																																							  ],
																																							],
																																						  ],
																																						],
																																					  ],
																																					],
																																				  ],
																																				],
																																			  ],
																																			],
																																		  ],
																																		],
																																	  ],
																																	],
																																  ],
																																],
																															  ],
																															],
																														  ],
																														],
																													  ],
																													],
																												  ],
																												],
																											  ],
																											],
																										  ],
																										],
																									  ],
																									],
																								  ],
																								],
																							  ],
																							],
																						  ],
																						],
																					  ],
																					],
																				  ],
																				],
																			  ],
																			],
																		  ],
																		],
																	  ],
																	],
																  ],
																],
															  ],
															],
														  ],
														],
													  ],
													],
												  ],
												],
											  ],
											],
										  ],
										],
									  ],
									],
								  ],
								],
							  ],
							],
						  ],
						],
					  ],
					],
				  ],
				],
			  ],
			],
		  ],
		],
	  ],
	],
	],
	];
}
