<!DOCTYPE html>
<html lang="pt-br">
<head>
<!-- Meta tags Obrigatórias -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">






<title>principal</title>
</head>
<body class="bg-dark">
<div class="container">
<center><div class="alert alert-info" role="alert">
<?php
session_start();

echo "Bem vindo ". $_SESSION["n"] . " você está logado como " . $_SESSION["t"];
echo "<br>";


?>
</div></center>

<hr class="bg-light">

<ul class="nav nav-pills justify-content-end bg-dark">

<?php
	if($_SESSION["t"]=="admin"){

?>



  <li class="nav-item dropdown btn bg-light" style="margin-right: 5px;">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Clientes</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="frm_cliente.php">Cadastrar</a>
      <a class="dropdown-item" href="lista_cliente.php">Listar</a>
      <a class="dropdown-item" href="lista_cliente.php">Alterar</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="lista_cliente.php">Excluir</a>
    </div>
  </li>
  
  <?php
	}

?>
  <li class="nav-item dropdown btn bg-light">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Produtos</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="produto/frm_produto.php">Cadastrar</a>
      <a class="dropdown-item" href="produto/lista_produto.php">Listar</a>
      <a class="dropdown-item" href="produto/lista_produto.php">Alterar</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="produto/lista_produto.php">Excluir</a>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="sair.php"><button class="btn btn-danger">Sair</button></a>
  </li>
</ul>
<hr class="bg-light">
<hr>
<!-- fim nav -->



</div>
<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->



<script src="js/jquery-3.5.1.min.js"> </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>



<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>





</body>
</html>