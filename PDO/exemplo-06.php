<?php 

$conn = new PDO("mysql:host=localhost;dbname=db_php7", "root", "");

// Iniciar transação
$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE id_usuario = ?");

$id = 2;

//$stmt->bindParam(":ID", $id);

$stmt->execute(array($id));

// Cancelar transação
//$conn->rollback();

// Confirmar transação
$conn->commit();

echo "Deletado OK";

 ?>