<?php
/*1- Fazer a chamada do arquivo com infromações da conexao*/

require "conexao.php";

/*2- Pegar o valor vindo da url*/

$id_cliente=$_GET["id"];

/*3- Criando o comando sql para excluir registros*/

$comandoSql="delete from tb_cliente where id_cliente=$id_cliente";

/*4- executando  o comando sql*/

$resultado=mysqli_query($con,$comandoSql);






?>


			

		
<br>
<br>
<div class="container text-light text-center">
	<?php  
	/*5- Verificando se o comando sql foi executado*/
	include "principal.php"; 

		if($resultado==true){
			echo "Excluido com sucesso";
	}else{
		echo "Erro ao excluir";
	}

	?>
	
<br><br><a href="lista_cliente.php"> Voltar Lista Cliente </a><br>
<a href="frm_cliente.html"> Ir para cadastro </a><br>
</div>