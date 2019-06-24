<?php 

//session_start();
require_once("config.php");

// Limpa variáveis de sessão
session_unset();

echo $_SESSION["nome"];

// Limpa variáveis de sessão e remove o usuário
session_destroy();

 ?>