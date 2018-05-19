<?php 

$nome = 'Lucas';
$idade = 24;

echo 'Meu nome é \'$nome\' e tenho $idade anos';
echo '<hr>';
echo 'Meu nome é \'' . $nome . '\' e tenho ' . $idade . ' anos';
echo '<hr>';
echo "Meu nome é \"$nome\" e \\ tenho $idade anos";
echo '<hr>';
echo "Meu nome é {$nome} e tenho {$idade} anos";