<?php 
session_start();

//Destruindo as variaveis de sessao
session_destroy();

//Redirecionadno para a pagina de login
header("Location:index.html");





 ?>