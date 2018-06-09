<?php 

require_once 'banco.php';

$data = buscarTodos('usuarios');

?>

<table border="1">
	<tr>
		<td>Id</td>
		<td>Nome</td>
		<td>Email</td>
		<td>Senha</td>
		<td>Ações</td>
	</tr>
	<?php foreach ($data as $user): ?>
		<tr>
			<td><?= $user['id'] ?></td>
			<td><?= $user['nome'] ?></td>
			<td><?= $user['email'] ?></td>
			<td><?= $user['senha'] ?></td>
			<td><a href="form.php?id=<?=$user['id'] ?>">Editar</a> |
				<a href="form.php?action=excluir&id=<?=$user['id'] ?>">Excluir</a>
			</td>
		</tr>
	<?php endforeach; ?>
</table>