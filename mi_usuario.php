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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/mi_usuario.css">
    <link rel="stylesheet" type="text/css" href="menu/styles.css">

    <title>Great Pet</title>
</head>

<body>


<header>
        <div class="headersi">

            <a href="index.php">
                <img class="img-header FOTO-LOGO" src="img/logo_definitivo.png" alt="s">
            </a>

            <nav class=" roboto2">
                <div class="menu-icon" id="menu-icon">&#9776;</div>
                <ul class="navegacion menu" id="menu">
                    <H2 class="nombre_proyecto_en_menu sigmar">Great Pet</H2>

                    <div class="linea_menu_res"></div>

                    <div class="contenedor_navegacion">
                        <li>
                            <a class="TEXTO-LINK" href="index.php">
                                <h4>Inicio</h4>
                            </a>
                        </li>
                    </div>

                    <div class="contenedor_navegacion">
                        <li>
                            <a class="TEXTO-LINK" href="#">
                                <h4>Adopción</h4>
                            </a>
                        </li>
                    </div>

                    <div class="contenedor_navegacion">
                        <li>
                            <a class="TEXTO-LINK" href="busqueda.php">
                                <h4>Búsqueda</h4>
                            </a>
                        </li>
                    </div>

                    <div class="contenedor_navegacion">
                        <li>
                            <a class="TEXTO-LINK" href="qr.php">
                                <h4>QR</h4>
                            </a>
                        </li>
                    </div>

                    <div class="contenedor_navegacion">
                        <li>
                            <a class="TEXTO-LINK" href="servicios.php">
                                <h4>Servicios</h4>
                            </a>
                        </li>
                    </div>
                </ul>
            </nav>

            <div id="boton_sesion">
                
            </div>

            <script src="menu/script.js"></script>
        
        </div>
    </header>


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

    <footer>
        <div class="caja-contenedora-footer">

            <div class="caja-footer_1">
                <img class="img-footer" src="img/logo-footer.png" alt="">
            </div>

            <div class="contenedor_caja_2_3_4">
                <div class="caja-titulo-texto-footer">
                    <div class="caja-footer_2-titulo">
                        <div class="titulo-contactos-footer roboto">
                            <h2>¿Quienes somos?</h2>
                        </div>
                    </div>


                    <div class="caja-footer_3-linea"></div>


                    <div class="caja-footer_4-descripcion">
                        <div class="caja-des caja-des1 roboto">

                            <div class="a-footer">
                                <a>
                                    Great Peat es una asociación civil sin fines de lucro abocada a difundir, proteger y
                                    promover los derechos de los animales.</a>
                            </div>

                        </div>
                    </div>
                </div>




                <div class="caja-titulo-texto-footer">
                    <div class="caja-footer_2-titulo">
                        <div class="titulo-contactos-footer roboto">
                            <h2>Contactos</h2>
                        </div>
                    </div>
                    <div class="caja-footer_3-linea caja-footer_3-linea2"></div>
                    <div class="caja-footer_4-descripcion">
                        <div class="caja-des caja-dess roboto">

                            <a href="mailto:dani.gimenez5330@gmail.com" >

                                <div class="a-footer_1 lexend">
                                    <div class="logo_contacto">
                                        <i class="fa-regular fa-envelope" style="color: #f7cdaa;"></i>
                                    </div>

                                    <p class="enlaces_footer">Gmail</p>
                                </div>
                            </a>

                            <a href="https://wa.me/541162444423" enlaces_footer >
                                <div class="a-footer_1 lexend">
                                    <div class="logo_contacto">
                                        <i class="fa-brands fa-whatsapp" style="color: #f7cdaa;"></i>
                                    </div>
                                    <p class="enlaces_footer">WhatsApp</p>
                                </div>
                            </a>

                            <a href="#" >
                                <div class="a-footer_1 lexend">
                                    <div class="logo_contacto">
                                        <i class="fa-brands fa-instagram" style="color: #f7cdaa;"></i>
                                    </div>

                                    <p class="enlaces_footer">Instagram</p>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>




            </div>
        </div>
    </footer>
    
    <script src="ir_atras.js"></script>

    <script type="text/javascript">

    function modo(){
      var modo=<?php echo $modo; ?>;
      boton_sesion.innerHTML = "";
        if (modo==1) {
            const tpl = tpl__carnet1.content
            const clon = tpl.cloneNode(true);
            boton_sesion.appendChild(clon);
        }
        if (modo==0) {
         const tpl = tpl__carnet2.content
         const clon = tpl.cloneNode(true);
         boton_sesion.appendChild(clon);
        }
    }

    modo();

</script>

</body>
</html>