<?php 

// Tipos básicos
$nome = "HCode";
$site = 'www.hcode.com.br';

$ano = 1990;

$salario = 5550.99;

$bloqueado = false;

// Tipos compostos
$frutas = array("abacaxi", "laranja", "manga");

echo $frutas[2];

$nascimento = new Datetime();

echo "<br/>";
var_dump($nascimento);

// Tipos especiais
$arquivo = fopen("exemplo-03.php", "r");

echo "<br/>";
var_dump($arquivo);

$nulo = NULL;
$vazio = "";	// Vazio é diferente de nulo

 ?>