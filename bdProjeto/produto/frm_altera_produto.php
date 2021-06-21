<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Alteração de Produto</title>

<link rel="stylesheet" type="text/css" href="../bootstrap.css">	

		<style>
		.jumbotron{ width: 500px;
					margin-left: auto;
					margin-right:auto;
					text-align:center;
					margin-top: 20px;
					background-color: #DCDCDC; }
		.h1{text-align:center;}
		.input{text-align:center;}
		</style>	

</head>
<body>

   <?php
  /* 1- pegando o valor da variavel vindo da url */
 
  	$id_produto= $_GET["id"];

  /*2- fazendo a chamada do arquivo com informacoes da conexao */
 
  	require "../conexao.php";

  /*3- criando o comando sql para listar os dados do cliente selecionado */
 
  	$comandoSql="select * from tb_produto where id_produto=$id_produto ";

  /*4- executando o comando sql */
 
	$resultado=mysqli_query($con,$comandoSql);

  /*5- pegando os dados da consulta criada e armazenando em variaveis */
   
  	$dados=mysqli_fetch_assoc($resultado);

		$nome=$dados["nome_produto"];
		$origem=$dados["origem_produto"];
		$categoria=$dados["categoria_produto"];
		$perecivel=$dados["perecivel_produto"];


?>
  <!-- 6 - preenchendo o formulario com dados da consulta -->
    
   <div class="jumbotron">
    <h2> Alterar Produto </h2>
	<form action="altera_produto.php" method="POST">

			<label for="txtId"> Id: <input class="form-control" type="text" id="txtId" name="txtId" readonly value="<?php echo $id_produto?>" > </label>
      
		<br>
      <label for="txtNome"> Nome do Produto </label>
      <input class="form-control" type="text" id="txtNome" name="txtNome" value="<?php echo $nome?>">
	  <br>
	  
	  <label for="radOrigem"> Origem: </label>
      <input class="form-check-input" type="radio" id="radOrigem1" name="radOrigem" value="nacional" <?php if ($origem == "nacional")  echo "checked=checked"?>> Nacional
      <input class="form-check-input" type="radio" id="radOrigem2" name="radOrigem" value="importado" <?php if ($origem == "importado")echo "checked=checked"?>> Importado
	  <br>
	  <br>
	  <label for="sltCategoria"> Categoria </label>
      <select class="form-select" id="sltCategoria" name="sltCategoria">
      	<option value="">Selecione</option>
      	<option value="frios" <?php if($categoria=="frios") echo "selected=selected"?> >Frios</option>
      	<option value="bebidas" <?php if($categoria=="bebidas") echo "selected=selected"?> >Bebidas</option>
      	<option value="mercearia" <?php if($categoria=="mercearia") echo "selected=selected"?> >Mercearia</option>
      	<option value="limpeza" <?php if($categoria=="limpeza") echo "selected=selected"?> >Limpeza</option>
      </select>
	  <br>

	 <label for="checkPerecivel"> Perecivel </label>
     <input class="form-check-input" type="checkbox" id="checkPerecivel" name="checkPerecivel" <?php if ($perecivel == true) echo "checked=checked"?>> 
	 <br>
	 <br>
     <input class="btn btn-primary btn-lg w-100" type="submit" value="Alterar">
   </form>
 
 <br> 
 <a href="lista_produto.php"> Listar Produto </a>
 <br>
</div>
  
</body>
</html>
