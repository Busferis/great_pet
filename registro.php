<?php

session_start();

if (isset($_SESSION["id_usuario"])) {
    header("Location: panel.php");
    exit();
}

if (isset($_POST["email"]) && isset($_POST["password"])) {
        $con = mysqli_connect("localhost", "great_pet", "admin.greatpet.gecko23", "great_pet");

        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $email = $_POST["email"];
        $password = md5($_POST["password"]);
        $localidad = $_POST["localidad"];
        // $confirmarPassword = $_POST["confirmar_password"];

        if (!isset($_POST["politica_privacidad"])) {
            echo "Debes aceptar la Política de Privacidad antes de continuar.";
        }

        // else if ($password !== $confirmarPassword) {
        //     echo "Las contraseñas no coinciden.";
        // } 
        else {
            $sql = "SELECT * FROM `usuarios` WHERE email = '$email'";
            $res = mysqli_query($con, $sql);

            if (mysqli_num_rows($res) > 0) {
            	echo "El email ya está registrado.";
            } else {
                $insertarSql = "INSERT INTO `usuarios` (email, contraseña, nombre, apellido, localidad, contacto, fechaRegistro)
                 VALUES ('$email', '$password', '$nombre', '$apellido', '$localidad', '', CURRENT_TIMESTAMP)";
                if (mysqli_query($con, $insertarSql)) {
                    $_SESSION["registro_exitoso"] = true;
                    header("Location: login.php");
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
    <div class="registro">
        <h1 class="roboto">Registro</h1>
        <form action="" method="POST">
            <div class="input">
                <input type="text" name="nombre" placeholder="Nombre" required>
                <input type="text" name="apellido" placeholder="Apellido" required>
                <input type="email" name="email" placeholder="Correo electronico" required>
                <select name="localidad">
                    <option value="1667">Tortuguitas</option>
                </select>
                <input type="password" name="password" placeholder="Contraseña" id="myInput" required>
                <!-- <input type="password" name="confirmar_password" placeholder="Repetir contraseña" id="myInput2" required> -->
                <div>
                    <input type="checkbox" onclick="myFunction()"><label>Mostrar contraseña</label>
                </div>
            </div>
            <hr class="hr">
            <div class="checkbox">
                <input type="checkbox" name="politica_privacidad"><label>Acepto la <a href="politica_de_privacidad.php">Politica de Privacidad</a> de Great Pet</label>
            </div>
            <div class="button">
                <input type="submit" value="Registrar">
            </div>
            <script>
                function myFunction() {
                var x = document.getElementById("myInput");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
                //   var y = document.getElementById("myInput2");
                //   if (y.type === "password") {
                //     y.type = "text";
                //   } else {
                //     y.type = "password";
                //   }
                }
            </script>
        </form>
    </div>
</body>
</html>