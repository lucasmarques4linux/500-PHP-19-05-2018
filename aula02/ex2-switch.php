<?php 

// Vamos ler dois números
// Vamos ler uma opção
// caso opção 1 - somar os dois números e mostrar o resultado
// caso opção 2 - subtrair os dois números e mostrar o resultado
// caso opção 3 - multiplicar os dois números e mostrar o resultado
// caso opção 4 - dividir os dois números e mostrar o resultado

$num1 = readline('Num1 ');
$num2 = readline('Num2 ');

echo '----------' . PHP_EOL;
echo '-1 - Soma-' . PHP_EOL;
echo '-2 - Subt-' . PHP_EOL;
echo '-3 - Mult-' . PHP_EOL;
echo '-4 - Divi-' . PHP_EOL;
echo '----------' . PHP_EOL;

$op = readline('OP: ');

switch ($op) {
	case 1:
		 $result = $num1 + $num2; 
	break;
	case 2:
		 $result = $num1 - $num2; 
	break;
	case 3:
		 $result = $num1 * $num2; 
	break;
	case 4:
		 $result = $num1 / $num2; 
	break;
	default:
		$result = 'Inválido';
		break;
}

echo 'Resultado: ' . $result . PHP_EOL;