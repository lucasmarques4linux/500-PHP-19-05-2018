<?php 

// CLI
// Usando array númerico e usando array associativo
// Ler informações de uma pessoa
// Armazenar as informações em um array;
// Exibir as informações vindas do array;
// Nome, Idade, Email, Empresa;

$pessoa[] = readline('Nome: ');
$pessoa[] = readline('Idade: ');
$pessoa[] = readline('Email: ');
$pessoa[] = readline('Empresa: ');

for ($i=0; $i < 4; $i++) { 
	echo $pessoa[$i] . PHP_EOL;
}

echo '---------------------------------';

$pessoa['nome'] = readline('Nome: ');
$pessoa['idade'] = readline('Idade: ');
$pessoa['email'] = readline('Email: ');
$pessoa['empresa'] = readline('Empresa: ');

echo $pessoa['nome'] . PHP_EOL;
echo $pessoa['idade'] . PHP_EOL;
echo $pessoa['email'] . PHP_EOL;
echo $pessoa['empresa'] . PHP_EOL;