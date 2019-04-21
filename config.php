<?php 

<<<<<<< HEAD
spl_autoload_register(function($class_name){

	$filename = "class". DIRECTORY_SEPARATOR. $class_name.".php";
=======
spl_autoload_register(function($class_naame){

	$filename = "class". DIRECTORY_SEPARATOR. $class_naame.".php";
>>>>>>> 294c66d81e198b39691e9a89dc7a2b533a2dac97

	if (file_exists($filename)){
		require_once($filename);
	}

});


 ?>