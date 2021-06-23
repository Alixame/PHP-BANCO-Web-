<?php

/*1- fazendo a chamada do arquivo com informacoes da conexao */
  
	require "conexao.php";

/*2- pegando os dados vindos do formulario e armazenando em variaveis */
 
	$login=$_POST["login"];
	$senha=$_POST["senha"];
	
/*3- criando o comando sql para insercao do registro */
 
	$comandoSql="select * from tb_usuario where login_usuario = '$login' and senha_usuario='$senha'";

/*4- executando o comando sql */
	
	$resultado=mysqli_query($con,$comandoSql);

/*5- verificando se o comando sql foi executado */

	if(mysqli_num_rows($resultado) <= 0){
		
		header("Location:index.html");

	}else{
		
		$dados=mysqli_fetch_assoc($resultado);

		$nome=$dados["nome_usuario"];
		$tipo=$dados["tipo_usuario"];

		session_start();
		$_SESSION["n"]=$nome;
		$_SESSION["t"]=$tipo;

		header("Location:principal.php");

	}

?>