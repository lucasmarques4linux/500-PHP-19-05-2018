<?php 

require 'conexao.php';

/* 
	nome
	email
	senha
*/

$nome = 'Lucas Marques';
$email = 'lucas.marques@4linux.com.br';
$senha = '123';
$id = 1;

$query = "UPDATE usuarios SET nome='{$nome}',email='{$email}', senha='{$senha}' WHERE id={$id}";

echo '<pre>';
echo $query;
echo '<br>';


$result = mysqli_query($con,$query);
if($result){
	echo 'Ok';
} else {
	echo 'Erro ao editar';
}