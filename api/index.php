<?php 


	 header("Content-Type: application/json");

	

	// analizamos lo que vino por la url y buscamos las variables que ahora se pasan como si fueran carpetas (/perfil/1000)
	$_PARAMETERS = explode("/", $_GET["section"]);


	$model = $_PARAMETERS[0];

	if(!file_exists($model."Model.php")){
		echo json_encode(array("errno" => 404, "error" => "El modelo no existe"));
		exit();
	}

	include_once $model."Model.php";

	$model = ucfirst($model);

	$object = new $model();


	$method = $_PARAMETERS[1];

	if(!method_exists($object, $method)){
		echo json_encode(array("errno" => 404, "error" => "El metodo no existe dentro de la clase"));
		exit();
	}

	unset($_PARAMETERS[0]);
	unset($_PARAMETERS[1]);

	$_PARAMETERS = array_values($_PARAMETERS);

	echo json_encode($object->$method($_PARAMETERS));



 ?>