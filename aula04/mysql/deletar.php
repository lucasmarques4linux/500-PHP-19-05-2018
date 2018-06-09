<?php 

require 'conexao.php';

$id = 3;

$query = "DELETE FROM usuarios WHERE id={$id}";

echo '<pre>';
echo $query;
echo '<br>';

$result = mysqli_query($con,$query);
if($result){
	echo 'Ok';
} else {
	echo 'Erro ao deletar';
}