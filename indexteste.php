<?php 

require_once("config.php");

$lista = Usuario::getList();

echo json_encode($lista);


?>