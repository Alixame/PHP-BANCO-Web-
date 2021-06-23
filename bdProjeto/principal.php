<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Index</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">


</head>
<body>
<div class="text-center">
	<div class="container">
		<div class="alert alert-primary" role="alert">
		<?php
			session_start();

			echo "Bem vindo ".$_SESSION["n"]." você está logado como ".$_SESSION["t"]."<br>";


		?>	
		</div>
	</div>



		<h2> Sistemas de Clientes </h2>
		<br>
		<br>
		<a href="cliente/frm_cliente.html">Cadastrar</a>
		<br>
		<a href="cliente/lista_cliente.php">Mostrar Clientes(Tabela)</a>
		<br>
		<a href="listas/lista_cliente.php">Mostar Clientes</a>
		<br>
</div>
</body>
</html>