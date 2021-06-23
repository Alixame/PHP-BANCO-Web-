<?php
  /*1- fazendo a chamada do arquivo com informacoes da conexao */
  
   require "../conexao.php";

  /*2- pegando os dados vindos do formulario e armazenando em variaveis */
  	
  $id=$_POST["txtId"];
	$nome=$_POST["txtNome"];
	$rg=$_POST["txtRg"];
	$cpf=$_POST["txtCpf"];
	$email=$_POST["txtEmail"];
	$numero=$_POST["txtNumero"];
	$endereco=$_POST["txtEndereco"];

  /*3- criando o comando sql para alteracao do registro */
 
    $comandoSql="update tb_cliente set nome_cliente='$nome', rg_cliente='$rg', cpf_cliente='$cpf' , email_cliente='$email', numero_cliente='$numero',endereco_cliente='$endereco' where id_cliente='$id' " ;
  
  /*4- executando o comando sql */
 
	$resultado=mysqli_query($con,$comandoSql);

  /*5- verificando se o comando sql foi executado */
  
  	if($resultado==true){

  		echo "Cliente Alterado com sucesso!";

  	}else{

  		echo "Erro ao Alterar";

  	}


?>

<br>
<a href="lista_cliente.php"> Voltar </a><br>
<a href="frm_cliente.html"> Ir para Cadastro </a><br>