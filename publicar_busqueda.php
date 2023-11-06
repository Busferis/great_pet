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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo_pestaña.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/publicar_busqueda.css">

    <title>Great Pet</title>
</head>

<body>



    <main>

        <div class="contenedor-MAS-main-adopcion">

            <div class="caja_principal1">

                <div class="titulo_principal lexend">
                    <P>Buscar mascota</P>
                </div>

                <div class="linea_mis_mascotas"></div>




                <form action="" method="POST">
                    <div class="contenedor_tarjetas_mis_mascotas">

                        <div class="caja_contenedor_descripcion">
                            <label for="descripcion" class="titulo_descripcion roboto">Descripción </label><br>
                            <textarea id="descripcion" class="descripcion_ensi roboto" name="descripcion" rows="4"
                                cols="50" oninput="checkLength(this);"
                                placeholder="Aquí puedes contar brevemente como se perdio la mascota, algunas caracteristicas, como por ejemplo que collar lleva, tambien podriamos decir por donde podria estar la mascota"></textarea><br>
                            <span id="contador" class="lexend">200</span>
                        </div>

                        <div class="contenedor_selec_fecha">

                            <!-- <div class="seleccionnm">
                                <p class="titulo_selecionar roboto">Tipo de recompensa </p>
                                <div class="opciones_rew">
                                    <input type="radio" id="opcion1" name="opcion" value="opcion1">
                                    <label for="opcion1" class="recompensas_img"><img class="recompensas_img"
                                        src="/img/recopensa-efectivo-busqueda.png" alt=""></label><br>
                                    <input type="radio" id="opcion2" name="opcion" value="opcion2">
                                    <label for="opcion2" class="recompensas_img"><img class="recompensas_img"
                                        src="/img/recopensa-regalo-busqueda.png" alt=""></label><br>
                                    <input type="radio" id="opcion3" name="opcion" value="opcion3">
                                    <label for="opcion3" class="recompensas_img"><img class="recompensas_img"
                                        src="/img/recopensa-gracias-busqueda.png" alt=""></label><br><br>
                                </div>
                            </div> -->

                            <div class="fechaaa">
                                <label for="fecha" class="fecha2 roboto">Fecha desaparición</label>
                                <input type="date" id="fecha" name="fecha" class="roboto">


                            </div>
                            <input type="submit" value="Enviar" class="boton_enviar lexend">
                        </div>

                    </div>
                </form>




            </div>
        </div>

    </main>







</body>
<script>
    function checkLength(textarea) {
        var maxLength = 200;
        var currentLength = textarea.value.length;
        var charactersRemaining = maxLength - currentLength;
        var contador = document.getElementById("contador");

        if (charactersRemaining >= 0) {
            contador.textContent = charactersRemaining ;
        } else {
            textarea.value = textarea.value.slice(0, maxLength);
            contador.textContent = "0";
        }
    }
</script>

</html>