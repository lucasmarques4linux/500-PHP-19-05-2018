<?php 

echo '<pre>';

$var1 = 10;
var_dump($var1);
$var2 = (bool) $var1;
var_dump($var2);
$var3 = (int) $var2;
var_dump($var3);
$var4 = (float) $var3;
var_dump($var4);
$var5 = (string) $var4;
var_dump($var5);