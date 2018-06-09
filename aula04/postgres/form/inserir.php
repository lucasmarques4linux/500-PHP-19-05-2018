<?php 

require_once 'banco.php';

if (!empty($_POST)) {
	$dados = [
		'nome' => $_POST['nome'],
		'email' => $_POST['email'], 
		'senha' => $_POST['senha']
	];

	$id = $_POST['id'] ?? null;

	if($id){
		if(editar('usuarios', $dados, "id={$id}")){
			echo '<p>Editado Com Sucesso</p>';
		} else {
			echo '<p>Erro ao Editar</p>';
		}
	} else {
		if(inserir('usuarios', $dados)){
			echo '<p>Inserido Com Sucesso</p>';
		} else {
			echo '<p>Erro ao Inserir</p>';
		}
	}
	
}