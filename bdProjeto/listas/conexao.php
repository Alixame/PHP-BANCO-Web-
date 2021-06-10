<?php

   //1- realizando a conexao com o banco de dados
   //(local,usuario,senha,nomeBanco)
   
  $con=mysqli_connect("localhost","root","","bd_projeto");

  //2- verificando se a conexao foi estabelecida
  
  if(mysqli_connect_errno()){
	  echo "Erro ao conectar: ". mysqli_connect_error();
  }else{
	  //echo "Conexao ok!<br>";
  }

?>