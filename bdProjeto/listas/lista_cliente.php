<?php
/*1- Fazer a chamada do arquivo com infromações da conexao*/

require "conexao.php";

/*2- Criando o comando sql para consulta de registros*/

$comandoSql="select * from tb_cliente";

/*3- executando  o comando sql*/

$resultado=mysqli_query($con,$comandoSql);

/*4- Pegando os dados da consulta criada e exibindo*/

while($dados=mysqli_fetch_assoc($resultado)){
	
	$id=$dados["id_cliente"];
	$nome=$dados["nome_cliente"];
	$rg=$dados["rg_cliente"];
	$cpf=$dados["cpf_cliente"];
	$email=$dados["email_cliente"];
	
	echo "<br><br>Id: $id<br>
		  Nome: $nome<br>
		  RG: $rg<br>
		  CPF: $cpf<br>
		  Email: $email<br>";
	

	echo "<br>";
	echo "<a href='exclui_cliente.php?id=$id'>Excluir</a>";
	echo "<br>";


	echo "<a href='frm_altera_cliente.php?id=$id'>Alterar</a>";
	echo "<br>";
}






?>


<br>
<br>
<a href="frm_cliente.html"> Voltar </a>