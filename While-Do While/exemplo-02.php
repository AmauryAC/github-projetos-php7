<?php 

$total = 150;
$desconto = 0.9;	// Desconto de 10%

do {

	$total *= $desconto;

} while ($total > 100);

echo $total;

 ?>