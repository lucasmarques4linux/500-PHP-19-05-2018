<?php 

//Utilizando a estrutura de repetição WHILE, imprima os números de 0 a 10;
//Utilizando a estrutura de repetição WHILE, imprima os números pares de 0 a 20;
//Utilizando a estrutura de repetição WHILE, imprima os números ímpares de 0 a 20;
//Utilizando a estrutura de repetição WHILE, imprima os números múltiplos de 5 de 0 a 50;

$num = 0;

while ($num <= 10) {
	echo $num.PHP_EOL;
	$num++;
}

echo '-------------------------'.PHP_EOL;

$num = 0;

while ($num <= 20) {
	// Par quando resto da divisão por 2 é 0;
	if ($num % 2 == 0 ) {
		echo $num.PHP_EOL;	
	}
	$num++;		
	// $num+= 2;// Incrementa de dois em dois
}

echo '-------------------------'.PHP_EOL;

$num = 0; // Inicia em 1 e incrementa de 2 em 2

while ($num <= 20) {
	// Impar quando resto da divisão por 2 é diferente de 0;
	if ($num % 2 != 0 ) {
		echo $num.PHP_EOL;	
	}
	$num++;		
	// $num+= 2;// Incrementa de dois em dois
}

echo '-------------------------'.PHP_EOL;

$num = 0;

while ($num <= 50) {
	// Multiplo de 5 quando resto da divisão por 5 é 0;
	if ($num % 5 == 0 ) {
		echo $num.PHP_EOL;	
	}
	$num++;		
	// $num+= 5;// Incrementa de 5 em 5
}