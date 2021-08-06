<?php
  /*1- fazendo a chamada do arquivo com informacoes da conexao */
  
	require "conexao.php";

  /*2- pegando os dados vindos do formulario e armazenando em variaveis */
 
	$nome=$_POST["txtNome"];
	$rg=$_POST["txtRg"];
	$cpf=$_POST["txtCpf"];
	$email=$_POST["txtEmail"];
	$numero=$_POST["txtNumero"];
	$endereco=$_POST["txtEndereco"];
	
  /*3- criando o comando sql para insercao do registro */
 
	$comandoSql="insert into tb_cliente
	(nome_cliente,rg_cliente,cpf_cliente,email_cliente,numero_cliente,endereco_cliente)
	values
	('$nome','$rg','$cpf','$email','$numero','$endereco')"; 

  /*4- executando o comando sql */
	
	$resultado=mysqli_query($con,$comandoSql);

  /*5- verificando se o comando sql foi executado */

	if($resultado==true){
		echo "Cadastrado com sucesso";
	}else{
		echo "Erro no cadastro";
	}

?>
<br>
<a href="lista_cliente.php"> Ir Lista Cliente </a><br>
<a href="frm_cliente.html"> Voltar para cadastro </a><br>