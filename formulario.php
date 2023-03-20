<!DOCTYPE html>
<html>
<head>
	<title>Formulário PHP</title>
</head>
<body>

	<h1>Formulário de Exemplo</h1>

	<form method="POST" action="enviar.php">
		<label for="nome">Nome:</label>
		<input type="text" name="nome" id="nome"><br>

		<label for="email">Email:</label>
		<input type="email" name="email" id="email"><br>

		<input type="submit" value="Enviar">
	</form>

</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$nome = $_POST['nome'];
	$email = $_POST['email'];

	echo "Nome: " . $nome . "<br>";
	echo "Email: " . $email . "<br>";
}

?>
