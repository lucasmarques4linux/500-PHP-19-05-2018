<?php 

// CLI - Switch
// Nota - Digite sua Nota
// Frequencia - Digite sua Frequencia
// Se está Aprovado
// Se está em Recuperação
// Se está Reprovado
// Aprovado - nota >= 7 e frequencia>= 8
// Recuperacao - nota >= 5 ou nota < 7 e frequencia >=8
// Reprovado - nota < 5 ou frequencia < 8

$nota = readline("Nota: ");
$freq = readline("Frequencia: ");

switch (true) {
	case ($nota >= 7 && $freq >= 8):
			echo 'Aprovado'.PHP_EOL;
		break;
	case ($nota >= 5 && $freq >=8):
			echo 'Recuperação'.PHP_EOL;
		break;
	default:
			echo 'Reprovado'.PHP_EOL;
		break;
}