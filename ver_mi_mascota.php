<?php
session_start();

if (isset($_SESSION["nombre"])) {
    $nombre = $_SESSION["nombre"];
}
if (isset($_SESSION["id_usuario"])) {
    $id_usuario = $_SESSION["id_usuario"];
}
else{
    header("Location: index.php");
    exit();
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/ver_mi_mascota.css">
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
                            <a class="TEXTO-LINK" href="servicios.php">
                                <h4>Servicios</h4>
                            </a>
                        </li>
                    </div>
                </ul>
            </nav>

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
            <script src="menu/script.js"></script>
        </div>
    </header>

    <content>

        <div class="contenedor-qr-realizado-main-adopcion">
            <div class="caja-centradora-qr-realizado">
                <button onclick="goBack()" class="boton_ir_atras"><span class="material-icons-outlined flecha_ir_atras">
                    arrow_back
                </span>
                </button>

                <div class="caja-titulo-qr-realizado lexend">
                    <p>Iformación</p>
                    
                </div>

                <div class="caja-mascota-info-foto-qr-marcota-realizado">
                    <div class="caja-foto-mascota-qr-realizado" id="imagen"> </div>

                    <div class="caja-info-mascota-qr-realizado">

                        <div class="titulo-info-qr-realizado lexend"> <p>Mascota</p> </div>
                        <div class="linea-qr-realizado"></div>
                        <div class="datos-qr-realizado">

                            <div class="caja-datos-qr-realizado">
                                <div class="a-dato-qr-r roboto"><p>Nombre</p></div>
                                <div class="b-dato-qr-r roboto" id="nombre_id">Juanita</div>
                                
                            </div>

                            <div class="caja-datos-qr-realizado">
                                <div class="a-dato-qr-r roboto">Edad</div>
                                <div class="b-dato-qr-r roboto" id="edad_id">2 Años</div>
                                                                
                            </div>
                            <div class="caja-datos-qr-realizado">
                                <div class="a-dato-qr-r roboto">Sexo</div>
                                <div class="b-dato-qr-r roboto" id="sexo_id">Femenino</div>

                                
                            </div>
                            <div class="caja-datos-qr-realizado">
                                <div class="a-dato-qr-r roboto">Raza</div>
                                <div class="b-dato-qr-r roboto" id="raza_id">Pitbull</div>
                                
                            </div>

                        </div>

                    </div>
                    
                    
                </div>
            </div>
        </div>

        <div class="fondo_qr_responsive">
            <div class="contenedor_todo_qr">


                <div class="me_encontraste sigmar">
                    <p>¡ME ENCONTRASTE!</p>
                </div>
                <div class="mega_tarjeta_mascota_qr">
                    <div class="contenedor_img1">
                        <div class="foto_1">
                            <div class="nombre_mascota_reponsive_qr lexend ">
                                <P>Juanita</P>
                            </div>
                        </div>
                    </div>
                
                 
                 
                    <div class="contenedores_datos_mascota">
                    
                        <div class="tituli_contenedor_responsive_qr lexend">
                            <p>Mascota</p>
                        </div>

                        <div class="tituli_contenedor_responsive_qr2 lexend">
                            <p>Dueño</p>
                        </div>

                        <div class="caja_contenedora_datos_qr_reponsive arriba_caja_contenedora_datos_qr_reponsive">
                            <div class="contenedor_color_dartos_qr_re">
                                <div class="color_pate_iz1 lexend"><P>Edad</P></div>
                                <div class="color_pate_dr1 roboto2"> 2 Años</div>
                            </div>
                            <div class="contenedor_color_dartos_qr_re">
                                <div class="color_pate_iz1 lexend">Sexo</div>
                                <div class="color_pate_dr1 roboto2">Femenino</div>
                            </div>
                            <div class="contenedor_color_dartos_qr_re">
                                <div class="color_pate_iz1 lexend">Raza</div>
                                <div class="color_pate_dr1 roboto2">Pitbull</div>
                            </div>
                     
                        </div>
                        <div class="caja_contenedora_datos_qr_reponsive arriba_caja_contenedora_datos_qr_reponsive">
                            <div class="contenedor_color_dartos_qr_re">
                                <div class="color_pate_iz222 lexend"><P>Nombre</P></div>
                                <div class="color_pate_dr222 roboto2">Daniel Gimenez</div>
                            </div>
                            <div class="contenedor_color_dartos_qr_re2">
                                <div class="color_pate_iz2 lexend">Enviar Mensaje</div>
                                <a href="https://wa.me/541162444423" class="color_pate_dr2 roboto2">
                                <div class="caja_img_wp_qr_re"><img src="img/whatsapp-fill.svg" alt="whatsapp">                                </div>
                                </a>
                            </div>
                          
                     
                        </div> 
                    </div>


                    <div class="contenedores_datos_mascota2">
                        <div class="tituli_contenedor_responsive_qr3 lexend">
                            <p>Ubicación</p>
                        </div>
                        <div class="caja_contenedora_datos_qr_reponsive">
                            <iframe class="img-ubicacion-qr-realizado2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26312.465050589446!2d-58.76746792293106!3d-34.476049543910825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bc988e12661a07%3A0xa51def392da2533!2sTortuguitas%2C%20Provincia%20de%20Buenos%20Aires!5e0!3m2!1ses-419!2sar!4v1693261106036!5m2!1ses-419!2sar" width="450" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </content>

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
        async function hola(){
            var datos_mascotas = JSON.parse(sessionStorage.getItem("mascota"));
            console.log(datos_mascotas);
            var nombre = datos_mascotas[0].nombre;
            var edad = datos_mascotas[0].edad;
            var sexo = datos_mascotas[0].sexo;
            var raza = datos_mascotas[0].raza;
            var imagen = datos_mascotas[0].imagen;
            console.log(nombre);
            console.log(edad);
            console.log(sexo);
            console.log(raza);
            document.getElementById("nombre_id").innerHTML = nombre;
            document.getElementById("edad_id").innerHTML = edad;
            document.getElementById("sexo_id").innerHTML = sexo;
            document.getElementById("raza_id").innerHTML = raza;
            document.getElementById("imagen").style.backgroundImage = "url('img/" + imagen + "')";
        }
        hola();
    </script>

    <script src="ir_atras.js"></script>

</body>

</html>