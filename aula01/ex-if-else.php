<?php 

// CLI
// Receber uma idade
// Se maior idade
// Exibir Você é maior de idade
// Senão
// Exibir Você é menor de idade;

$idade = readline('Digite sua idade: ');

if ($idade >= 18) {
	echo 'Você é maior de idade' . PHP_EOL;
} else {
	echo 'Você é menor de idade' . PHP_EOL;
}