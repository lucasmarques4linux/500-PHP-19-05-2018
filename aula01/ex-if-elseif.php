<?php 

// CLI
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

if ($nota >= 7 && $freq >= 8) {
	echo 'Aprovado'.PHP_EOL;
} else if ($nota >= 5 && $freq >=8){
	echo 'Recuperação'.PHP_EOL;
} else{
	echo 'Reprovado'.PHP_EOL;
}