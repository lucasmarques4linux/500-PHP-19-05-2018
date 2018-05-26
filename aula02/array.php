<?php 

echo '<pre>';
// Array

// [0] = valor
// [1] = valor2

// $arr = ['valor1', 'valor2',1,true,2.3];
// $arr = array('string',true,1,2.3);

// $arr[] = 'string';
// $arr[3] = 123;
// $arr[3] = 456;

$arr = ['Lucas',24,'lucasmarques73@hotmail.com',1.80];

//echo $arr; Não funciona

print_r($arr); // Funciona
// var_dump($arr); // Funciona

echo $arr[0] . '<br>';
echo $arr[1] . '<br>';
echo $arr[2] . '<br>';
echo $arr[3] . '<br>';

// echo '<hr>';

// for ($i=0; $i < 4; $i++) { 
// 	echo $arr[$i] . '<br>';
// }

echo '<hr>';

// Array Associativo

$pessoa = [
	'nome'   => 'Lucas',
//    0 => 'Lucas',
	'idade'  => 24 ,
// 	  1 => 24,
	'email'  => 'lucasmarques73@hotmail.com',
// 	  2 => 'lucasmarques73@hotmail.com',
	'altura' =>1.80
//	  3 => 1.80	 
	];

print_r($pessoa);

echo $pessoa['nome'] . '<br>';
echo $pessoa['idade'] . '<br>';
echo $pessoa['email'] . '<br>';
echo $pessoa['altura'] . '<br>';