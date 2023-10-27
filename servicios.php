<?php
session_start();

if (isset($_SESSION["nombre"])) {
    $nombre = $_SESSION["nombre"];
}
if (isset($_SESSION["id_usuario"])) {
    $id_usuario = $_SESSION["id_usuario"];
    $modo = 1;
} else{
    $modo = 0;
}
$_SESSION["pagina"] = 5;
var_dump($_SESSION["pagina"]);

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
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/servicios.css">
    <link rel="stylesheet" type="text/css" href="menu/styles.css">

    <title>Great Pet</title>
</head>

<body>

    <template id="tpl__carnet1">
        <div class="redesu roboto">
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn a"><?php echo ''.$nombre.'' ?>
                    <span class="material-icons-outlined dropbtn flecha_abajo">
                        expand_more
                    </span></button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="mi_usuario.php" class="opciones roboto">Mi Perfil</a>
                    <a href="mis_mascotas.php" class="opciones roboto">Mis Mascotas</a>
                    <a href="logout.php" class="opciones roboto">Cerrar sesión</a>
                </div>
            </div>
        </div>
    </template>

    <template id="tpl__carnet2">
        <div class="redes roboto">
            <a href="login.php" class="registrarse">Iniciar sesión</a>
        </div>
    </template>

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
                            <a class="TEXTO-LINK" href="adopcion.php">
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
                            <a class="TEXTO-LINK" href="#">
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

        <div class="contenedor-sevicios-main-adopcion">

            <div class="caja-contenedora-header-foto-recomendaciones">

                <div class="contenedora-header-foto-recomendaciones">

                    <div class="logo_negro-fondo-cartel"></div>

                    <div class="img_perro_servicios">

                    </div>
                    <div class="contenedor-titulo_mensaje_servicios">
                        <div class="titulo_mensaje_servicios">
                            <div class="titulo_recomendaciones_servicios sigmar">
                                <p>Recomendaciones</p>
                            </div>
                            <div class="mesaje_servicios_ releway">
                                <p>¡Los mejores servicios para tus queridas mascotas!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="contenedora_tarjetas_recomendaciones">
                <div class="tarjeta_servicios">
                    <div class="contenedor_imagen_refuguio_tarjeta">
                        <div class="imagen_refuguio_tarjeta">

                        </div>
                    </div>
                    <div class="titulo_descripcion_contactos">
                        <div class="titulo_tipo_reco lexend">
                            <div class="nombre_empresa_servicio">
                                <p>PeloPets</p>
                            </div>
                            <div class="contenedor_tipo_servicios">
                                <div class="tipo_servicio">
                                    <p>Veterinario</p>
                                </div>
                            </div>
                        </div>
                        <div class="linea_reco_refuguios">

                        </div>
                        <div class="contenedor_parrafo_info_reco releway">
                            <p class="parrafo_info_reco">En Clínica Veterinaria PeloPets, nos preocupamos por el
                                bienestar y la salud de tus queridas mascotas. Nuestro equipo de profesionales
                                veterinarios altamente capacitados está dedicado a brindar atención médica integral y de
                                calidad a todos los animales que ingresan por nuestras puertas.
                        </div>

                        <div class="contactos_refu">
                            <div class="contenedor_contactos_refuguios">

                                <div class="contactos_refuguios_mail_num">
                                    <span class="material-icons-outlined icons_telefono_mail">
                                        call
                                    </span>
                                    <p class="email_num_ref roboto"><u>+54 9 11 1122 4322</u></p>
                                </div>
                                <div class="contactos_refuguios_mail_num">
                                    <span class="material-icons-outlined icons_telefono_mail">
                                        email
                                    </span>
                                    <p class="email_num_ref roboto"><u>pelopets5220@gmail.com</u></p>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>








                <div class="tarjeta_servicios">
                    <div class="contenedor_imagen_refuguio_tarjeta">
                        <div class="bimagen_refuguio_tarjeta">

                        </div>
                    </div>
                    <div class="titulo_descripcion_contactos">
                        <div class="titulo_tipo_reco lexend">
                            <div class="nombre_empresa_servicio">
                                <p>Solo Mascotas</p>
                            </div>
                            <div class="contenedor_tipo_servicios">
                                <div class="tipo_servicio">
                                    <p>Forrajeria</p>
                                </div>
                            </div>
                        </div>
                        <div class="linea_reco_refuguios">

                        </div>
                        <div class="contenedor_parrafo_info_reco releway">
                            <p class="parrafo_info_reco">Bienvenido a Solo Mascotas, tu destino de confianza para todas
                                las necesidades de alimentación y suministros para tus animales. En La Forrajera, nos
                                dedicamos a proporcionar productos de alta calidad y un servicio excepcional para
                                satisfacer las demandas de los amantes de los animales y los criadores.
                        </div>

                        <div class="contactos_refu">
                            <div class="contenedor_contactos_refuguios">

                                <div class="contactos_refuguios_mail_num">
                                    <span class="material-icons-outlined icons_telefono_mail">
                                        call
                                    </span>
                                    <p class="email_num_ref roboto"><u>+54 9 11 8293 3392</u></p>
                                </div>
                                <div class="contactos_refuguios_mail_num">
                                    <span class="material-icons-outlined icons_telefono_mail">
                                        email
                                    </span>
                                    <p class="email_num_ref roboto"><u>solomascotas01@gmail.com</u></p>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>









                <div class="tarjeta_servicios">
                    <div class="contenedor_imagen_refuguio_tarjeta">
                        <div class="cimagen_refuguio_tarjeta">

                        </div>
                    </div>
                    <div class="titulo_descripcion_contactos">
                        <div class="titulo_tipo_reco lexend">
                            <div class="nombre_empresa_servicio">
                                <p>Moño y Hueso</p>
                            </div>
                            <div class="contenedor_tipo_servicios">
                                <div class="tipo_servicio">
                                    <p>Peluqueria Canina</p>
                                </div>
                            </div>
                        </div>
                        <div class="linea_reco_refuguios">

                        </div>
                        <div class="contenedor_parrafo_info_reco releway">
                            <p class="parrafo_info_reco">Bienvenido a Moño y Huesos, el lugar perfecto para consentir a
                                tu fiel amigo de cuatro patas. Nos especializamos en brindar servicios de aseo y
                                estilismo de alta calidad para animales.</p>
                        </div>

                        <div class="contactos_refu">
                            <div class="contenedor_contactos_refuguios">

                                <div class="contactos_refuguios_mail_num">
                                    <span class="material-icons-outlined icons_telefono_mail">
                                        call
                                    </span>
                                    <p class="email_num_ref roboto"><u>+54 9 11 1482 2735</u></p>
                                </div>
                                <div class="contactos_refuguios_mail_num">
                                    <span class="material-icons-outlined icons_telefono_mail">
                                        email
                                    </span>
                                    <p class="email_num_ref roboto"><u>moñosyhuesos32@gmail.com</u></p>
                                </div>

                            </div>
                        </div>

                    </div>
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

    <script src="menu_responsive.js"></script>

</body>

</html>