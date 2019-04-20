<?php 

spl_autoload_register(function($class_naame){

	$filename = $class_naame.".php";

	if (file_exists($filename)){
		require_once($filename);
	}

});


 ?>