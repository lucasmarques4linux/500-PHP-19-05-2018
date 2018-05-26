<?php 


// Ternario
$idade = 19;

if ($idade > 18) {
	echo 'True';
} else {
	echo 'False';
}

echo PHP_EOL;

echo ($idade > 18) ? 'True' : 'False';

// Operador Elvis

echo ($idade) ?: 'falso';