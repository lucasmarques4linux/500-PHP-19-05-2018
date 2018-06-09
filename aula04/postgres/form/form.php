<?php require 'editar.php' ?>

<form method="POST">
	<p>Nome <input type="text" name="nome" value="<?= $user['nome'] ?? null ?>"></p>
	<p>Email <input type="email" name="email" value="<?= $user['email'] ?? null?>"></p>
	<p>Senha <input type="password" name="senha" value="<?= $user['senha'] ?? null?>"></p>
	<input type="hidden" name="id" value="<?= $user['id'] ?? null?>" >
	<p><input type="submit" value="Salvar"></p>
</form>

<?php require 'inserir.php'; ?>
<?php require 'listar.php'; ?>
<?php require 'excluir.php'; ?>