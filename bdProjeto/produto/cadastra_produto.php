<?php
  /*1- fazendo a chamada do arquivo com informacoes da conexao */
  require "../conexao.php";
  /*2- pegando os dados vindos do formulario e armazenando em variaveis */
 
 
  $nome=$_POST["txtNome"];
  $origem=$_POST["radOrigem"];
  $categoria=$_POST["sltCategoria"];
  
  if(isset($_POST["checkPerecivel"]))
    $perecivel=true;
  else
    $perecivel=false;
  
 /*3- criando o comando sql para insercao do registro */
  
  $comandoSql="insert into tb_produto(nome_produto,origem_produto,categoria_produto,perecivel_produto)
  values
  ('$nome','$origem','$categoria','$perecivel')";
  
  /*4- executando o comando sql */
  $resultado=mysqli_query($con,$comandoSql);

  /*5- verificando se o comando sql foi executado */ 
  if($resultado==true){
  	echo "Cadastrado com sucesso";
  }else{
    echo "Erro no cadastro";

  }

   echo "<br> <a href='listar_produto.php'>Listar Produto </a>";

  
?>