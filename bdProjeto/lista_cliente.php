<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<?php
/*1- Fazer a chamada do arquivo com infromações da conexao*/

require "conexao.php";

/*2- Criando o comando sql para consulta de registros*/

$comandoSql="select * from tb_cliente";

/*3- executando  o comando sql*/

$resultado=mysqli_query($con,$comandoSql);


/*4- Pegando os dados da consulta criada e exibindo*/
?>
<body class="container bg-dark">
	<?php

			include "principal.php";

		?>
<div class="text-light">
	
<table class="table table-striped table-light" border align="center">

				<thead>
					<tr>
						<th>Id</th>
						<th>Nome</th>
						<th>RG</th>
						<th>CPF</th>
						<th>Email</th>
						<th>Numero Contato</th>
						<th>Endereço</th>
						<th>Excluir</th>
						<th>Alterar</th>
					</th>
				</thead>
<?php
while($dados=mysqli_fetch_assoc($resultado)){
	
	$id=$dados["id_cliente"];
	$nome=$dados["nome_cliente"];
	$rg=$dados["rg_cliente"];
	$cpf=$dados["cpf_cliente"];
	$email=$dados["email_cliente"];
	$numero=$dados["numero_cliente"];
	$endereco=$dados["endereco_cliente"];
	
	echo "
			<tbody>
				<tr>
					<td>$id</td>
					<td>$nome</td>
					<td>$rg</td>	
					<td>$cpf</td>
					<td>$email</td>
					<td>$numero</td>
					<td>$endereco</td>
					<br>
					<td><center><a href='exclui_cliente.php?id=$id'> <img src='img/excluir.png' width='25'> </a> </center></td>
					<br>
					<td><center><a href='frm_altera_cliente.php?id=$id'> <img src='img/alterar.png' width='25'> </a></center></td>
					<br>
				</tr>
			</tbody>";
	
}
?>
<center><h1>Tabela de Clintes</h1></center>
</table>
</div>
</body>
<br>
<br>
<center><a href="frm_cliente.html"> Voltar </a></center>