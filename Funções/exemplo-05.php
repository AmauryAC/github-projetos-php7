<?php 

$a = 10;

// Passagem por valor
/*
function trocaValor($a) {
	$a += 50;

	return $a;
}*/

// Passagem por referência
function trocaValor(&$a) {
	$a += 50;

	return $a;
}

echo trocaValor($a);
echo "<br/>";
echo trocaValor($a);
echo "<br/>";
echo $a;

 ?>