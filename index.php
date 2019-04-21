<?php 

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
<<<<<<< HEAD



=======
>>>>>>> f9a0212e81b1a95133400d494f65f1fd1fd16fd9
 ?>