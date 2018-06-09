<?php 

require 'conexao.php';

$id = 2;

$query = "DELETE FROM usuarios WHERE id={$id}";

echo '<pre>';
echo $query;
echo '<br>';

$result = pg_query($con,$query);
if($result){
	echo 'Ok';
} else {
	echo 'Erro ao deletar';
}