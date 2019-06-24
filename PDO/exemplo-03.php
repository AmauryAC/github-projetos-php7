<?php 

$conn = new PDO("mysql:host=localhost;dbname=db_php7", "root", "");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (des_login, des_senha) VALUES (:LOGIN, :PASSWORD)");

$login = "jose";
$password = "1234567890";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Inserido OK";

 ?>