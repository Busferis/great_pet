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
    // var_dump($id_usuario);

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
    <link rel="stylesheet" href="css/mi_usuario.css">

    <title>Great Pet</title>
</head>

<body>

    <main>
        <div class="contenedor-mi_usuario">
            <div class="caja_principal1">
                <button onclick="goBack()" class="boton_ir_atras"><span class="material-icons-outlined flecha_ir_atras">
                    arrow_back
                    </span>
                </button>

                <div class="titulo_mi_perfil lexend"><p>Mi Perfil</p></div>
                <div class="linea_mis_mascotas"></div>

                <div class="fondo_contenedor_de_datos">

                    <div class="contenedor_datos_colum">
                       
                        <div class="contenedor_datos_fila">

                            <div class="cajas_de_datos_">
                                <div class="tipo_de_datos roboto2">Nombre</div>
                                <div class="resuiltado_dato roboto">
                                    <?php echo "<p>$nombre</p>" ?>
                                </div>
                            </div>
                            <div class="cajas_de_datos_">
                                <div class="tipo_de_datos roboto2">Apellido</div>
                                <div class="resuiltado_dato roboto">
                                    <?php echo "<p>$apellido</p>" ?>
                                </div>
                            </div>
                            <div class="cajas_de_datos_">
                                <div class="tipo_de_datos roboto2">Email</div>
                                <div class="resuiltado_dato roboto">
                                    <?php echo "<p>$email</p>" ?>
                                </div>
                            </div>

                        </div>

                        <div class="contenedor_datos_fila">

                            <div class="cajas_de_datos_">
                                <div class="tipo_de_datos roboto2 fdn">Fecha de Nacimiento</div>
                                <div class="resuiltado_dato roboto">
                                    <p>30/03/05</p>
                                </div>
                            </div>
                            <div class="cajas_de_datos_">
                                <div class="tipo_de_datos roboto2">Telefono</div>
                                <div class="resuiltado_dato roboto">
                                    <p>+54 09 11-62444423</p>
                                </div>
                            </div>
                            <div class="cajas_de_datos_">
                                <div class="tipo_de_datos roboto2">Localidad</div>
                                <div class="resuiltado_dato roboto">
                                    <?php echo "<p>$localidad</p>" ?>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="contenedor_boton_modificar">
                    <a href="modificar.php"><input type="button"  class="modificar_datos lexend" value="Modificar"></a>
                </div>

            </div>
        </div>

    </main>
    
    <script src="ir_atras.js"></script>

</body>
</html>