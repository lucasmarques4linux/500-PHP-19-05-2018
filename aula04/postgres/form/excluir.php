<?php 

require_once 'banco.php';

// POST é melhor
$id = $_GET['id'] ?? null;
$action = $_GET['action'] ?? null;
if ($id && $action == 'excluir') {
	$onde = "id={$id}";
	deletar('usuarios', $onde);
}