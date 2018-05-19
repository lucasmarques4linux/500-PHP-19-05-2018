<?php 

echo '<pre>';

echo 'Operador AND && <br>';
echo 'true and true ';
var_dump(true AND true);
echo 'true and false ';
var_dump(true && false);
echo 'false and true ';
var_dump(false && true);
echo 'false and false ';
var_dump(false && false);
echo '<hr>';

echo 'Operador OR || <br>';
echo 'true or true ';
var_dump(true || true);
echo 'true or false ';
var_dump(true || false);
echo 'false or true ';
var_dump(false || true);
echo 'false or false ';
var_dump(false || false);
echo '<hr>';


echo 'Operador XOR <br>';
echo 'true XOR true ';
var_dump(true XOR true);
echo 'true XOR false ';
var_dump(true XOR false);
echo 'false XOR true ';
var_dump(false XOR true);
echo 'false XOR false ';
var_dump(false XOR false);
echo '<hr>';

echo 'Operador de Negação ! <br>';
echo '!false ';
var_dump(!false);
echo '!true ';
var_dump(!true);