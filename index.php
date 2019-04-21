<?php 

require_once("config.php");

<<<<<<< HEAD
/*$sql = new Sql();
=======
$sql = new Sql();
>>>>>>> 294c66d81e198b39691e9a89dc7a2b533a2dac97

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);

<<<<<<< HEAD
*/
//---------------------------------------------

//carrega um usuário

/*$root  = new Usuario();

$root->loadbyID(1);

echo $root;
*/

//---------------------------------

//carrega uma lista de usuários.
//$lista = Usuario::getList();
//echo json_encode($lista);

//---------------------------------

//carrega uma lista de usuario buscando pelo id

$search = Usuario::search("pa");

echo json_encode($search);

//merdsssss :)

?>
=======


 ?>
>>>>>>> 294c66d81e198b39691e9a89dc7a2b533a2dac97
