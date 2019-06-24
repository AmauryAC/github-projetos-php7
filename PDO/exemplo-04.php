<?php 

$conn = new PDO("mysql:host=localhost;dbname=db_php7", "root", "");

$stmt = $conn->prepare("UPDATE tb_usuarios SET des_login = :LOGIN, des_senha = :PASSWORD WHERE id_usuario = :ID");

$login = "joao";
$password = "qwerty";
$id = 3;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Atualizado OK";

 ?>