<?php 

require_once("config.php");

/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

// Carrega um usuário
/*
$usuario = new Usuario();
$usuario->loadById(4);

echo $usuario;
*/

// Carrega uma lista de usuários
/*
$lista = Usuario::getList();

echo json_encode($lista);
*/

// Carrega uma lista de usuários buscando pelo login
/*
$search = Usuario::search("jo");

echo json_encode($search);
*/

// Carrega usuário pelo login e senha
/*
$usuario = new Usuario();
$usuario->login("joao", "qwerty");

echo $usuario;
*/

// Insere usuário novo
/*
$usuario = new Usuario("amauryac", "p0502");
$usuario->insert();

echo $usuario;
*/

// Atualiza um usuário
/*
$usuario = new Usuario();
$usuario->loadById(8);
$usuario->update("amaury0502", "Juve123");

echo $usuario;
*/

// Deleta um usuário
$usuario = new Usuario();
$usuario->loadById(6);
$usuario->delete();

echo $usuario;

 ?>