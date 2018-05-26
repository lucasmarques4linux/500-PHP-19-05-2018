<?php 

//Utilizando a estrutura de repetição FOR, imprima os números de 0 a 10;
//Utilizando a estrutura de repetição FOR, imprima os números pares de 0 a 20;
//Utilizando a estrutura de repetição FOR, imprima os números ímpares de 0 a 20;
//Utilizando a estrutura de repetição FOR, imprima os números múltiplos de 5 de 0 a 50;

for ($i=0; $i <= 10 ; $i++) { 
	echo $i.PHP_EOL;
}
echo '-------------------'.PHP_EOL;
for ($i=0; $i <= 20 ; $i++) { 
	echo ($i % 2 == 0) ? $i.PHP_EOL : null;
}
echo '-------------------'.PHP_EOL;
for ($i=0; $i <= 20 ; $i++) { 
	echo ($i % 2 != 0) ? $i.PHP_EOL : null;
}
echo '-------------------'.PHP_EOL;
for ($i=0; $i <= 50 ; $i++) { 
	echo ($i % 5 == 0) ? $i.PHP_EOL : null;
}