<?php 

$conn = new mysqli("localhost", "root", "", "db_php7");

if($conn->connect_error) {
	echo "Erro: " . $conn->connect_error;
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY des_login");

$data = array();

while($row = $result->fetch_array(MYSQLI_ASSOC)) {
	//var_dump($row);

	array_push($data, $row);
}

echo json_encode($data);

 ?>