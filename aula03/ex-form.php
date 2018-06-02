<h1>Calculadora</h1>
<p>Receba dois numeros atraves de um formulario.</p>
<p>
	Exibir a resposta:
	<ul>
		<li>Soma dos dois numeros</li>
		<li>Subtracao dos dois numeros</li>
		<li>Divisao dos dois numeros</li>
		<li>Multiplicacao dos dois numeros</li>
	</ul>
</p>
<form method="POST">
	<p>Num1 <input type="number" name="num1"></p>
	<p>Num2 <input type="number" name="num2"></p>
	<p><input type="submit" value="Calcular"></p>
</form>
<?php 

if (!empty($_POST)) {
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];

	echo '<p> Soma: '.($num1+$num2).'</p>';
	echo '<p> Subt: '.($num1-$num2).'</p>';
	echo '<p> Divi: '.($num1/$num2).'</p>';
	echo '<p> Mult: '.($num1*$num2).'</p>';
}