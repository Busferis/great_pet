<?php

session_start();

if (isset($_SESSION["id_usuario"])) {
    header("Location: panel.php");
    exit();
}

$msg1 = false;
$mgs2 = false;
$mgs3 = false;

if (isset($_POST["email"]) && isset($_POST["password"])) {
        $con = mysqli_connect("localhost", "great_pet", "admin.greatpet.gecko23", "great_pet");

        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $email = $_POST["email"];
        $password = md5($_POST["password"]);
        $localidad = $_POST["localidad"];
        // $confirmarPassword = $_POST["confirmar_password"];

        if (!isset($_POST["politica_privacidad"])) {
            $msg1 = true;
        }

        // else if ($password !== $confirmarPassword) {
        //     echo "Las contraseñas no coinciden.";
        // } 
        else {
            $sql = "SELECT * FROM `usuarios` WHERE email = '$email'";
            $res = mysqli_query($con, $sql);

            if (mysqli_num_rows($res) > 0) {
            	$msg2 = true;
            } else {
                $insertarSql = "INSERT INTO `usuarios` (email, contraseña, nombre, apellido, localidad, contacto, fechaRegistro)
                 VALUES ('$email', '$password', '$nombre', '$apellido', '$localidad', '', CURRENT_TIMESTAMP)";
                if (mysqli_query($con, $insertarSql)) {
                    $newUserId = mysqli_insert_id($con);
                    $_SESSION["registro_exitoso"] = true;
                    header("Location: login.php");
                    exit();
                } else {
                    $msg3 = true;
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

    <?php

        if (isset($msg1) && $msg1 == true) {
           echo "<div style='display: flex;     
            background-color: #ff000070;
            color: white;
           height: 50px;
           align-items: center;
           font-weight: bold;
           justify-content: center;
           width: 100%;''>Debe aceptar la Política de Privacidad antes de continuar.</div>";
        }

        if (isset($msg2) && $msg2 == true) {
           echo "<div style='display: flex;
           background-color: #37ff0066;
           color:white;
           height: 50px;
           align-items: center;
           font-weight: bold;
           justify-content: center;
           width: 100%;''>El email ya está registrado.</div>";
        }

        if (isset($msg3) && $msg3 == true) {
           echo "<div style='display: flex;     
           background-color: #ff000070;
           color: white;
           height: 50px;
           align-items: center;
           font-weight: bold;
           justify-content: center;
           width: 100%;''>Error en el registro. Por favor, inténtalo de nuevo.</div>";
        }

    ?>

    <div class="caja_contenedora_login_img">

    <div class="img-logo-gp"></div>

    <div class="registro">
        <h1 class="titulo_i_s lexend">Registro</h1>
        <form action="" method="POST">
            <div class="input">
                <div class="nombres">
                    <input type="text" name="nombre" placeholder="Nombre" class="nombre_apellido" required>
                    <input type="text" name="apellido" placeholder="Apellido" class="nombre_apellido" required>
                </div>
                <input type="email" name="email" id="txtDestinatario" placeholder="Correo electronico" required>
                <input type="number" name="telefono" placeholder="Numero. ej: 1123624722" required>
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
                <input type="password" name="password" placeholder="Contraseña" id="myInput" required>
                <!-- <input type="password" name="confirmar_password" placeholder="Repetir contraseña" id="myInput2" required> -->
                <div class="mostrar_contraseña_politica_privacidad">
                    <input type="checkbox" onclick="myFunction()"><label>Mostrar contraseña</label>
                </div>
            </div>
            <div class="checkbox mostrar_contraseña_politica_privacidad">
                <input type="checkbox" name="politica_privacidad"><label>Acepto la <a href="politica_de_privacidad.php">Politica de Privacidad</a> de Great Pet</label>
            </div>
            <div class="button">
                <input type="submit" id="btnSubmit" value="Registrar">
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


    </div>
    <script type="text/javascript" src="funciones.js"></script> 
</body>
</html>