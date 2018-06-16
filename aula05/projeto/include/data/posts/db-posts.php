<?php 

//db-posts.php

require_once dirname(__DIR__).'/db/connection.php';

function insertPost(array $post)
{
	$con = connect();
	$query = "INSERT INTO posts (titulo,conteudo,criado_em,publicado,usuario_id) VALUES ('{$post['titulo']}','{$post['conteudo']}','{$post['criado_em']}','{$post['publicado']}','{$post['usuario_id']}')";
	$result = pg_query($con,$query);
	disconnect($con);
	return $result;
}
function updatePost(){}
function deletePost(){}
function findByIdPost(int $id)
{
	$con = connect();
	$query = "SELECT * FROM posts WHERE id={$id}";
	$result = pg_query($con,$query);
	$post =  pg_fetch_assoc($result);
	disconnect($con);
	return $post;
}
function findAllPost()
{
	$con = connect();
	$query = "SELECT * FROM posts";
	$result = pg_query($con,$query);
	$posts =  pg_fetch_all($result);
	disconnect($con);
	return $posts;
}


$post = [
	'titulo' => 'Titulo do Post',
	'conteudo' => 'Conteudo do Post', 
	'criado_em' => date('Y-m-d H:i:s',time()), 
	'publicado' => 'f',
	'usuario_id' => 1
	];

insertPost($post);

echo '<pre>';
print_r(findAllPost());
