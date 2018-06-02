<?php 

$str = 'O Rato roeu a roupa do rei de Roma';

echo $str;
echo '<hr>';

// String para Maisculo
echo strtoupper($str);

echo '<hr>';

// String para Minusculo
echo strtolower($str);

echo '<hr>';

// Primeira Letra para Maisculo
echo ucfirst($str);

echo '<hr>';

// Primeira Letra de cada palavra para Maisculo
echo ucwords($str);

echo '<hr>';

// Quantidade de caracteres
echo strlen($str);

echo '<hr>';

// Subistitui valores da string conforme parametros

echo str_replace('Rato', 'Cachorro', $str);

echo '<br>';

echo str_replace(['Rato','roeu'],['Cachorro', 'comeu'], $str);


echo '<hr>';

// Parte de uma string
echo substr($str, 6);
echo '<br>';
echo substr($str, 6,10);

echo '<hr>';

// Procura pedaco de string

echo strpos($str, 'rei');