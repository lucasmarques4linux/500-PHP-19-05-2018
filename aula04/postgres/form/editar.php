<?php 

require_once 'banco.php';

$user = null;

// isset $_GET['id']

$id = $_GET['id'] ?? null;
if ($id) {
	$onde = "id={$id}";
	$user = buscar('usuarios','*', $onde);
}
