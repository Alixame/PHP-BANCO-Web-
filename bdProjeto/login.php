<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>index</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">


<script src="js/jquery-3.5.1.min.js" type="text/javascript"> </script>
<script src="js/bootstrap.min.js" type="text/javascript"> </script>
<script src="js/popper.min.js" type="text/javascript" > </script>

<style type="text/css">
	.color{
        background-color: black;
        border-radius: 10px;
        opacity: 95%;
      }
      .branca{
        color: white;
      }
      h1{
        color: white;
      }
      input { text-align: center; }
</style>


</head>
<body background="img/background.jpg">


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
		
		//header("Location:index.html");


?>

<!-- Modal -->

<script>
	$(document).ready(function (){
	$('#meuModal').modal('show');
	});
</script>

<div class="modal" tabindex="-1" role="dialog" id="meuModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<center><h2 class="modal-title">Atenção!</h2></center>
			</div>
			<div class="modal-body">
				<center><h4>As credencias estão invalidas!</h4></center>
				<center><h4>Verifique e tente novamente</h4></center>
			</div>
			<div class="modal-footer">
				<center><a href="index.html"><button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button></a></center>
			</div>
		</div>
	</div>
</div>

<!--Fim Modal-->

<?php

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



</body>
</html>