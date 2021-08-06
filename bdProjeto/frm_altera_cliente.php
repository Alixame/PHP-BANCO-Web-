<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Alteração de Cliente</title>

<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">	

</head>
<body>



   <?php
  /* 1- pegando o valor da variavel vindo da url */
 
  	$id_cliente= $_GET["id"];

  /*2- fazendo a chamada do arquivo com informacoes da conexao */
 
  	require "conexao.php";

  /*3- criando o comando sql para listar os dados do cliente selecionado */
 
  	$comandoSql=" select * from tb_cliente where id_cliente=$id_cliente ";

  /*4- executando o comando sql */
 
	$resultado=mysqli_query($con,$comandoSql);

  /*5- pegando os dados da consulta criada e armazenando em variaveis */
   
  	$dados=mysqli_fetch_assoc($resultado);

  	$nome=$dados["nome_cliente"];
  	$rg=$dados["rg_cliente"];
  	$cpf=$dados["cpf_cliente"];
  	$email=$dados["email_cliente"];
  	$numero=$dados["numero_cliente"];
	$endereco=$dados["endereco_cliente"];


?>
  <!-- 6 - preenchendo o formulario com dados da consulta -->
   

    <div class="container text-center">
    	 <?php

			include "principal.php";

		?>
    	<div class="h-100 p-5 text-white bg-dark rounded-3">
	<h1>Alterar Cliente</h1>
    <form action="altera_cliente.php" method="POST">
	<br>
	<label for="txtId" > Id </label>
	<input class="form-control" type="text" id="txtId" name="txtId" readonly value="<?php echo $id_cliente?>" >
	<br>
	<br>
	<label for="txtNome" > Nome </label>
	<input class="form-control" type="text" id="txtNome" name="txtNome" value="<?php echo $nome?>">
	<br>
	<br>
	<label for="txtRg"> RG </label>
	<input class="form-control" type="text" id="txtRg" name="txtRg" value="<?php echo $rg?>" >
	<br>
	<br>
	<label for="txtCpf"> CPF </label>
	<input class="form-control" type="text" id="txtCpf" name="txtCpf" value="<?php echo $cpf?>" >
	<br>
	<br>
	<label for="txtEmail"> Email </label>
	<input class="form-control" type="text" id="txtEmail" name="txtEmail" value="<?php echo $email?>" >
	<br>
	<br>
	<label for="txtEmail"> Numero de Contato </label>
	<input class="form-control" type="text" id="txtNumero" name="txtNumero" value="<?php echo $numero?>">
	<br>
	<br>
	<label for="txtEmail"> Endereço </label>
	<input class="form-control" type="text" id="txtEndereco" name="txtEndereco" value="<?php echo $endereco?>">
	<br>
	<br>
	<input class="btn btn-primary btn-lg w-100" type="submit" value="Alterar">
	</form>
	</div>
	</div>  
  
</body>
</html>
