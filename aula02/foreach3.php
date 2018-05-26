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

echo '<hr>';

// foreach ($pessoas as $chave => $valor) {
// 	echo 'chave '. $chave . ' - valor ' . $valor . '<br>';
// }

foreach ($pessoas as $pessoa) {
	echo $pessoa['nome'] . '<br>';
	echo $pessoa['idade'] . '<br>';
	// print_r($valor);
}