<?php 

$pessoa = [
	'nome'   => 'Lucas',
	'idade'  => 24 ,
	'email'  => 'lucasmarques73@hotmail.com',
	'altura' =>1.80
	];

print_r($pessoa);

echo '<hr>';

foreach ($pessoa as $chave => $valor) {
	echo 'chave '. $chave . ' - valor ' . $valor . '<br>';
}

echo '<hr>';

foreach ($pessoa as $valor) {
	echo 'valor ' . $valor . '<br>';
}