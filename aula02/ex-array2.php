<?php 

// Array $pessoa  -> Nome, Idade e Email
// Exibir na tela o conteúdo de cada informação seguindo o exemplo;
// Meu nome é $$$
// Tenho $$$ anos
// Meu email é $$$

$pessoa = [
	'nome' => 'Lucas', 
	'idade' => 24, 
	'email' => 'lucas@lucas.com'
	];

echo ' Meu nome é ' . $pessoa['nome'] . '<br>';
echo ' Tenho ' . $pessoa['idade'] . ' anos' . '<br>';
echo ' Meu email é ' . $pessoa['email'] . '<br>';

// Arrray PessoaS onde teremos 3 pessoa
// cada pessoa possui Nome, Idade e Email
// Exibir na tela o conteúdo de cada informação seguindo o exemplo;
// Meu nome é $$$
// Tenho $$$ anos
// Meu email é $$$

$pessoas = [
	[
		'nome' => 'Lucas Marques',
		'idade' => 24,
		'email'=> 'lucasmarques73@hotmail.com'
	],
	[
		'nome' => 'João Silva',
		'idade' => 32,
		'email'=> 'j.silva@hotmail.com'
	],
	[
		'nome' => 'Maria Lucia',
		'idade' => 40,
		'email'=> 'lucia.maria@hotmail.com'
	]
];

foreach ($pessoas as $pessoa) {
	echo '<hr>';
	echo ' Meu nome é ' . $pessoa['nome'] . '<br>';
	echo ' Tenho ' . $pessoa['idade'] . ' anos' . '<br>';
	echo ' Meu email é ' . $pessoa['email'] . '<br>';
	echo '<hr>';
}