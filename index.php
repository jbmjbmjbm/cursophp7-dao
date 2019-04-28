<?php 

require_once("config.php");

//$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);


//---------------------------------------------

//carrega um usuário

//$root  = new Usuario();

//$root->loadbyID(3);

//echo $root;

//---------------------------------

//carrega uma lista de usuários.

//$lista = Usuario::getList();
//echo json_encode($lista);

//---------------------------------

//carrega uma lista de usuario buscando pelo id
//$search = Usuario::search("te");

//echo json_encode($search);


//----------------------------------------

// carrega um usuario usando 0 login e senha

<<<<<<< HEAD
//$usuario = new Usuario();
//$usuario->login("Joao", "helena@123");

//echo $usuario;

//----------------------

// insert de um aluno novo

$aluno = new Usuario("aluno", "@alun0");

$aluno->insert();

echo $aluno;
=======
$usuario = new Usuario();
$usuario->login("teste", "@teste");

echo $usuario;


?>