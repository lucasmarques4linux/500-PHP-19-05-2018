<?php 

// CLI
// Criar uma função que receba um número e retorne se ele é par ou ímpar
// 2 - exibir PAR
// 3 - exibir IMPAR

function parImpar(int $num) : string
{
	return ($num % 2 == 0 ) ? 'PAR' : 'IMPAR';
}

// Criar uma função que receba uma idade e retorne se ele é maior de idade ou não
// 18 - retornar true
// 14 - retornar false
// Se Maior - exibir Maior de Idade
// Se Menor - exibir Menor de Idade

function verificarMaiorIdade(int $idade) : bool
{
	return ($idade >= 18) ? true : false;
}

// Criar uma função que receba dois números e retorne o maior
// Exibir o Maior numero

function verificaMaior(int $num1, int $num2) : int
{
	return ($num1 > $num2) ? $num1 : $num2;
}


echo '-- PAR - IMPAR --'.PHP_EOL;

$num = readline('Digite o numero: ');

echo parImpar($num) . PHP_EOL;

echo '-----------------'.PHP_EOL;
echo '-- MAIOR IDADE --'.PHP_EOL;

$num = readline('Digite a idade: ');

echo verificarMaiorIdade($num) ? 'Maior' : 'Menor';
echo ' de Idade' . PHP_EOL;

echo '-----------------'.PHP_EOL;
echo '- MAIOR  NUMERO -'.PHP_EOL;

$num1 = readline('Digite o primeiro numero: ');
$num2 = readline('Digite o segundo numero: ');

echo 'O Maior é ' . verificaMaior($num1,$num2) .PHP_EOL;
echo '-----------------'.PHP_EOL;