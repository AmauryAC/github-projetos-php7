<?php 

$resultado = 10 + 3 / 2;

echo $resultado . "<br/>";

$resultado = (10 + 3) / 2;

echo $resultado . "<br/>";

$resultado = (10 + 3) / 2 > 5 && 10 + 5 < 3;
var_dump($resultado);

echo "<br/>";

$resultado = (10 + 3) / 2 > 5 || 10 + 5 < 3;
var_dump($resultado);

 ?>