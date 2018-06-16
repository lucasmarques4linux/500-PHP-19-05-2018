<?php 

//db-login.php
require_once dirname(__DIR__).'/db/connection.php';

function findUser(string $user, string $pass)
{
	$con = connect();
	$query = "SELECT * FROM usuarios WHERE email='{$user}' AND senha='{$pass}'";
	$result = pg_query($con,$query);
	$user =  pg_fetch_assoc($result);
	disconnect($con);
	return $user;
}

function verifyLogin(string $user, string $pass)
{
	$user = findUser($user,$pass);
	if ($user) {
		// Inicia Sessão
		return true;
	} else {
		// Erro
		return false;
	}
}