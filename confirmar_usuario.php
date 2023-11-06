<?php

	session_start();
	$_SESSION["verificacion_exitosa"] = true;
    header("Location: login.php");
    exit();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Un momento...</title>
</head>
<body>
    
</body>
</html>