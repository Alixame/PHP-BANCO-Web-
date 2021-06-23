<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<style>
		.jumbotron{ width: 700px;
					margin-left: auto;
					margin-right:auto;
					text-align:center;
					}
		</style>	

<?php



/*1- Fazer a chamada do arquivo com infromações da conexao*/
require "../conexao.php";

/*2- Criando o comando sql para consulta de registros*/

$comandoSql="select * from tb_produto";

/*3- executando  o comando sql*/

$resultado=mysqli_query($con,$comandoSql);


/*4- Pegando os dados da consulta criada e exibindo*/
?>
<div class="jumbotron">
	
<table class="table table-dark table-hover" border align="center">
	
				<thead>
					<tr>
						<th>Id</th>
						<th>Nome</th>
						<th>Origem</th>
						<th>Categoria</th>
						<th>Perecível</th>
						<th>Excluir</th>
						<th>Alterar</th>
					</th>
				</thead>
</div>
<?php
while($dados=mysqli_fetch_assoc($resultado)){
	
	$id=$dados["id_produto"];
	$nome=$dados["nome_produto"];
	$origem=$dados["origem_produto"];
	$categoria=$dados["categoria_produto"];
	$perecivel=$dados["perecivel_produto"];

	/*Mudando forma de visualização do perecivel*/

	if ($perecivel == true) 
		$perecivel = "sim";
	else
		$perecivel = "nao";
	
		
	echo "
			<tbody>
				<tr>
					<td>$id</td>
					<td>$nome</td>
					<td>$origem</td>	
					<td>$categoria</td>
					<td>$perecivel</td>
					<br>
					<td><center><a href='exclui_produto.php?id=$id'> <img src='../img/excluir.png' width='25'> </a> </center></td>
					<br>
					<td><center><a href='frm_altera_produto.php?id=$id'> <img src='../img/alterar.png' width='25'> </a></center></td>
					<br>
				</tr>
			</tbody>";
	}
	
?>
</table>

<br>
<br>
<center><a href="frm_produto.html"> Voltar </a></center>