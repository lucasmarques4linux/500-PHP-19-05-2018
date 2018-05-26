<?php 


function olaMundo()
{
	echo 'Olá Mundo<br>';
}

olaMundo();
echo '<hr>';

function olaUsuario($nome)
{
	echo 'Olá ' . $nome . '<br>';
}

olaUsuario('Lucas');
olaUsuario('Maria');
echo '<hr>';

function olaUsuario2($nome = '4Linux')
{
	echo 'Olá ' . $nome . '<br>';
}

olaUsuario2('Lucas');
olaUsuario2();
echo '<hr>';

function soma(int $num1, int $num2)
{
	echo $num1 + $num2 . '<br>';
}

soma(5,4);

echo '<hr>';

// (int $idade) - força tipagem parametro
// : bool - força tipagem retorno
function verificaMaiorIdade(int $idade) : bool
{
	if ($idade >= 18) {
		return 'true';
	} else {
		return 'false';
	}
	// return ($idade >= 18) ? true : false;
}

$var = verificaMaiorIdade(24);
var_dump($var);

echo '<hr>';

// return - usado para retornar valor de função
function negrito(string $txt) : string
{
	return '<strong>' . $txt . '</strong>';
}

echo negrito('4Linux');
echo '<hr>';

function italico()
{
	// Usando váriavel de escopo global
	global $msg;
	echo '<i>' . $msg .'</i>';
}

$msg = '4Linux - PHP';

italico();


echo '<hr>';

function adicionar(&$fruta)
{
	++$fruta;
}

// adicionar(10);

$laranjas = 5;
echo $laranjas .'<br>';
++$laranjas;
echo $laranjas .'<br>';
adicionar($laranjas);
echo $laranjas .'<br>';
++$laranjas;
echo $laranjas .'<br>';