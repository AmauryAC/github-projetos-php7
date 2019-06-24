<?php 

function incluirClasses($nomeClasses) {
	if(file_exists($nomeClasses . ".php") === true)
		require_once($nomeClasses . ".php");
}

spl_autoload_register("incluirClasses");
spl_autoload_register(function($nomeClassses) {
	if(file_exists("Abstratas" . DIRECTORY_SEPARATOR . $nomeClassses . ".php") === true)
		require_once("Abstratas" . DIRECTORY_SEPARATOR . $nomeClassses . ".php");
});

$carro = new DelRey();

$carro->acelerar(80);

 ?>