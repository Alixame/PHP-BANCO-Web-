<?php
/*1- Fazer a chamada do arquivo com infromações da conexao*/

require "../conexao.php";

/*2- Pegar o valor vindo da url*/

$id_produto=$_GET["id"];

/*3- Criando o comando sql para excluir registros*/

$comandoSql="delete from tb_produto where id_produto=$id_produto";

/*4- executando  o comando sql*/

$resultado=mysqli_query($con,$comandoSql);


/*5- Verificando se o comando sql foi executado*/

if($resultado==true){
	echo "Excluido com sucesso";
}else{
	echo "Erro ao excluir";
}

?>


<br>
<br>
<a href="lista_produto.php"> Voltar Lista Produto </a><br>
<a href="frm_produto.html"> Ir para cadastro </a><br>