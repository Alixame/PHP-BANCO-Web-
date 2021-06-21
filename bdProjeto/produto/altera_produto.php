<?php
  /*1- fazendo a chamada do arquivo com informacoes da conexao */
  require "../conexao.php";


  /*2- pegando os dados vindos do formulario e armazenando em variaveis */
  $id=$_POST["txtId"];
  $nome=$_POST["txtNome"];
  $origem=$_POST["radOrigem"];
  $categoria=$_POST["sltCategoria"];

  if (isset($_POST["checkPerecivel"]))
     $perecivel= true;
   else
     $perecivel= false;


  /*3- criando o comando sql para alteracao do registro */
  $comandoSql="update tb_produto set nome_produto='$nome' ,origem_produto='$origem' ,categoria_produto='$categoria' , perecivel_produto= '$perecivel' where id_produto='$id'";
  
  
  /*4- executando o comando sql */
  $resultado=mysqli_query($con,$comandoSql);

  /*5- verificando se o comando sql foi executado */
  if($resultado==true){
  	echo"Alterado com sucesso";
  }else{
  	echo"Erro na Alteração";
  }

  echo "<br> <a href='lista_produto.php'> Voltar</a>";

?>