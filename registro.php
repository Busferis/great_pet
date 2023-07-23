<?php

session_start();

if (isset($_SESSION["idUsuario"])) {
    header("Location: panel.php");
    exit();
}

if (isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["confirmar_password"])) {
        $con = mysqli_connect("localhost", "great_pet", "admin.greatpet.gecko23", "great_pet");

        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirmarPassword = $_POST["confirmar_password"];

        if (!isset($_POST["politica_privacidad"])) {
            echo "Debes aceptar la Política de Privacidad antes de continuar.";
        }

        else if ($password !== $confirmarPassword) {
            echo "Las contraseñas no coinciden.";
        } else {
            $sql = "SELECT * FROM `usuarios` WHERE email = '$email'";
            $res = mysqli_query($con, $sql);

            if (mysqli_num_rows($res) > 0) {
            	echo "El email ya está registrado.";
            } else {
                $insertarSql = "INSERT INTO `usuarios` (email, contraseña, nombre, apellido, fechaRegistro) VALUES ('$email', '$password', '$nombre', '$apellido', CURRENT_TIMESTAMP)";
                if (mysqli_query($con, $insertarSql)) {
                    $_SESSION["registro_exitoso"] = true;
                    header("Location: index.html");
                    exit();
                } else {
                    echo "Error en el registro. Por favor, inténtalo de nuevo.";
                }
            }
        }

    mysqli_close($con);
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registro</title>
    <link rel="stylesheet" href="css/registro.css">

</head>
<body class="releway">
	<h1 class="roboto">Registro</h1>
	<form action="" method="POST">
        <div class="input">
            Nombre: <input type="text" name="nombre" required>
            Apellido: <input type="text" name="apellido" required>
            Email: <input type="email" name="email" required>
            Contraseña: <input type="password" name="password" required>
            Repetir Contraseña: <input type="password" name="confirmar_password" required>
        </div>
        <div>
            <input type="checkbox" name="politica_privacidad"><label>Acepto la <a href="">Politica de Privacidad</a> de Great Pet</label>
        </div>
        <div class="button">
            <input type="submit" value="Registrar">
        </div>
    </form>
</body>
</html>