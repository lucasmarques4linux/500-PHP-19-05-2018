<?php 

require 'conexao.php';

/* 
	nome
	email
	senha
*/

$nome = 'Paula Maria';
$email = 'paula.maria@4linux.com.br';
$senha = '123';

$query = "INSERT INTO usuarios(nome,email,senha) VALUES ('{$nome}','{$email}', '{$senha}')";

echo '<pre>';
echo $query;
echo '<br>';


$result = pg_query($con,$query);
if($result){
	echo 'Ok';
} else {
	echo 'Erro ao inserir';
}

