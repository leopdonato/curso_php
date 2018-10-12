<?php

if (isset($_POST['nome']) && empty($_POST['nome'])) {
	echo "preencha o nome completo <br>";
	
}

if (isset($_POST['cpf']) && empty($_POST['cpf'])) {
	echo "preencha o cpf <br>";
	
}

if (isset($_POST['cpf']) && !is_numeric($_POST['cpf'])) {
	echo "preencha o cpf com numero <br>";
}

?>

<form method="post" action="">
	<label>
		NOME COMPLETO:
	<input type="text" name="nome">
	</label>
	<label>
		CPF:
	<input type="text" name="cpf">
	</label>

	<input type="submit" value="cadastrar">
</form>