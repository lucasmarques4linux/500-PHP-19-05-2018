<?php 

// function nomeFunction(){}
// nomeFunction()

echo '<pre>';

$funcao = function ($nome){
	echo 'Func Anonimo - ' . $nome;
};

// var_dump($funcao);

$funcao('Lucas');
echo '<br>';
$funcao = 'Outra coisa';

var_dump($funcao);

echo '<hr>';

$nomes = ['Lucas', '4Linux','Maria', 'Jose'];

function encontraMaria($nome)
{
	if ($nome == 'Maria') {
		return $nome;
	}
}

$encontrado = array_filter($nomes,'encontraMaria');

print_r($encontrado);

echo '<hr>';


$encontrado = array_filter($nomes,function($nome){
	if ($nome == '4Linux') {
		return $nome;
	}
});

print_r($encontrado);
