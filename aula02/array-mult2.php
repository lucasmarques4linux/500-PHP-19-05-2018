<?php 

$pessoas = [	
	[
		'nome' => 'Lucas',
		'idade' => 24
	],
	[
		'nome' => 'Jose',
		'idade' => 65
	],
	[
		'nome' => 'Maria',
		'idade' => 22
	]
];
echo '<pre>';
// print_r($pessoas);
echo $pessoas[1]['nome'] . '<br>';
echo $pessoas[1]['idade'] . '<br>';