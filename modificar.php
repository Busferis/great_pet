<?php

	session_start();
    if (isset($_SESSION["nombre"]) && isset($_SESSION["apellido"]) && isset($_SESSION["email"]) 
    && isset($_SESSION["localidad"])) {
        $nombre = $_SESSION["nombre"];
        $apellido = $_SESSION["apellido"];
        $email = $_SESSION["email"];
        $localidad = $_SESSION["localidad"];
    } else{
        header("Location: login.php");
        exit();
    }
    if (isset($_SESSION["id_usuario"])) {
    	$id_usuario = $_SESSION["id_usuario"];
    }

    if (isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["email"]) && isset($_POST["localidad"]))
    {
    	$con = mysqli_connect("localhost", "great_pet", "admin.greatpet.gecko23", "great_pet");

    	$nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $email = $_POST["email"];
        $localidad = $_POST["localidad"];

        var_dump($nombre);
        var_dump($apellido);
        var_dump($email);
        var_dump($localidad);

		$sql = "UPDATE `usuarios` SET `nombre` = '$nombre', `apellido` = '$apellido' WHERE `id_usuario` = '$id_usuario'";
		$res = mysqli_query($con, $sql);

		if (mysqli_query($con, $sql)) {
            header("Location: mi_usuario.php");
			exit();
        } else {
            echo "Error en la modificacion. Por favor, inténtalo de nuevo.";
        }

        mysqli_close($con);
    }

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
    <link rel="stylesheet" href="css/registro.css">
</head>
<body class="body_modif releway">
    <div class="registro registro_modif">
        <h1 class=" titulo_i_s lexend ">Modificacion</h1>
        <form action="" method="POST">
            <div class="input">
                <input type="text" name="nombre" placeholder="Nombre" <?php echo "value='$nombre'" ?> required>
                <input type="text" name="apellido" placeholder="Apellido" <?php echo "value='$apellido'" ?> required>
                <input type="email" name="email" placeholder="Correo electronico" <?php echo "value='$email'" ?> required>
                <select name="localidad" class="localidad">
                    <option value="Tortuguitas">Tortuguitas</option>
                    <option value="Grand Bourg">Grand Bourg</option>
                    <option value="Pablo Nogués">Pablo Nogués</option>
                    <option value="Adolfo Sourdeaux">Adolfo Sourdeaux</option>
                    <option value="Villa de Mayo">Villa de Mayo</option>
                    <option value="Tierras Altas">Tierras Altas</option>
                    <option value="Los Polvorines">Los Polvorines</option>
                    <option value="El triángulo">El Triángulo</option>
                </select>
            </div>
            <div class="button">
                <input type="submit" value="Registrar">
            </div>
        </form>
    </div>
</body>
</html>