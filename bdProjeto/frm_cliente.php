<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title>Cadastro de Cliente</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>
	<div class="container text-center">

		<?php

			include "principal.php";

		?>
	<div class="h-100 p-5 text-white bg-dark rounded-3">
	<h1>Cadastro Cliente</h1>
    <form action="cadastra_cliente.php" method="POST">
	<br>
	<label for="txtNome" > Nome </label>
	<input class="form-control" type="text" id="txtNome" name="txtNome">
	<br>
	<br>
	<label for="txtRg"> RG </label>
	<input class="form-control" type="text" id="txtRg" name="txtRg">
	<br>
	<br>
	<label for="txtCpf"> CPF </label>
	<input class="form-control" type="text" id="txtCpf" name="txtCpf">
	<br>
	<br>
	<label for="txtEmail"> Email </label>
	<input class="form-control" type="text" id="txtEmail" name="txtEmail">
	<br>
	<br>
	<label for="txtEmail"> Numero de Contato </label>
	<input class="form-control" type="text" id="txtNumero" name="txtNumero">
	<br>
	<br>
	<label for="txtEmail"> Endereço </label>
	<input class="form-control" type="text" id="txtEndereco" name="txtEndereco">
	<br>
	<br>
	<input class="btn btn-primary btn-lg w-100" type="submit" value="Cadastrar">
	</form>
	</div>
  	</div>
  	<br>
	<center><a href="lista_cliente.php"> Lista Clientes </a></center>
	<br>

</body>
</html>
