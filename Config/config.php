<?php

return [
	'name' => 'ValidationShippingCompany',
	'fields' => ['id', 'name'],
	'sample' => [
		[
			'name' => 'id',
			'observation' => 'Código da transportadora.',
			'sample_1' => '1',
			'filled' => false
		], 
		[
			'name' => 'name',
			'observation' => 'Nome da transportadora.',
			'sample_1' => 'Mad-Max Transporter',
			'filled' => true
		]
	]
];
