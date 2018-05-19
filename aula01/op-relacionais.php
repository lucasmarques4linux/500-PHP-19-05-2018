<?php 

$num1 = 10;
$num2 = '10';

echo '<pre>';

var_dump($num1);
var_dump($num2);

echo 'Igual == ';
var_dump($num1 == $num2);
echo 'Diferente != ';
var_dump($num1 != $num2);
echo 'Idêntico === ';
var_dump($num1 === $num2);
echo 'Não Idêntico !== ';
var_dump($num1 !== $num2);
echo 'Maior > ';
var_dump($num1 > $num2);
echo 'Maior ou Igual >= ';
var_dump($num1 >= $num2);
echo 'Menor < ';
var_dump($num1 < $num2);
echo 'Menor ou Igual <= ';
var_dump($num1 <= $num2);
echo '<hr>';
echo 'Operador Spaceship <br>';
// $a <=> $b
var_dump(1 <=> 0);
var_dump(1 <=> 1);
var_dump(1 <=> 2);
