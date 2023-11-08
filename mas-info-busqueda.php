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
    <link rel="stylesheet" href="css/busqueda.css">
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
                            <a class="TEXTO-LINK" href="#">
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

        <div class="contenedor-qr-realizado-main-adopcion">

            <div class="caja-centradora-qr-realizado">
                <div class="caja-titulo-qr-realizado sigmar">
                    <p>Mas Información</p>

                </div>

                <div class="caja-mascota-info-foto-qr-marcota-realizado">
                    <div class="caja-foto-mascota-qr-realizado" id="imagen"> </div>

                    <div class="caja-info-mascota-qr-realizado">

                        <div class="titulo-info-qr-realizado lexend">
                            <p>Mi Historia</p>
                        </div>
                        <div class="linea-qr-realizado"></div>
                        <div class="datos-qr-realizado roboto" id="descripcion">
                            Laika, una gata de 10 meses, está perdida y necesitamos encontrarla. Es probable que esté
                            merodeando por zonas de Malvinas Argentinas. Lleva un collar rojo con el sistema QR de GREAT
                            PET.


                        </div>

                    </div>


                </div>


                <div class="caja-mascota-info-foto-qr-marcota-realizadob">


                    <div class="caja-ubicacion-mascota-qr-realizado">
                        <div class="titulo-info-qr-realizado lexend">
                            <p>Ubicación</p>
                        </div>
                        <div class="a-linea-qr-realizado"></div>
                        <iframe class="img-ubicacion-qr-realizado"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26312.465050589446!2d-58.76746792293106!3d-34.476049543910825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bc988e12661a07%3A0xa51def392da2533!2sTortuguitas%2C%20Provincia%20de%20Buenos%20Aires!5e0!3m2!1ses-419!2sar!4v1693261106036!5m2!1ses-419!2sar"
                            width="450" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="caja-info-dueño-qr-realizado">
                        
                        <div class="caja-info-dueño-qr-realizado caja-info-dueño-qr-realizado_fecha">
                                <label for="fecha" class="titulo-info-qr-realizado titulo-info-qr-realizado_desaparicion lexend">Fecha de desaparición</label>
                                <div class=" a-linea-qr-realizado_fecha a-linea-qr-realizado "></div>

                                <div class="b-dato-qr-r roboto" id="date">20/02/20</div>


                        </div>

                        <div class="titulo-info-qr-realizado lexend">
                            <p>Dueño</p>
                        </div>
                        <div class="a-linea-qr-realizado"></div>

                        <div class="datos-dueño-qr-realizado">

                            <div class="caja-datos-dueño-qr-realizado">
                                <div class="a-dato-qr-r roboto">
                                    <p>Nombre</p>
                                </div>
                                <div class="b-dato-qr-r roboto">Ivan Rossini</div>

                            </div>

                            <div class="caja-datos-dueño-qr-realizado">
                                <div class="a-dato-qr-r roboto">Telefono</div>
                                <a href='https://wa.me/541162444423'>
                                    <div class="b-dato-qr-r roboto"> +54 9 11 5343 8743</div>
                                </a>

                            </div>
                            <div class="caja-datos-dueño-qr-realizado">
                                <div class="a-dato-qr-r roboto">Gmail</div>
                                <div class="b-dato-qr-r roboto">ivan@gmail.com</div>


                            </div>

                        </div>

                        

                    </div>

                </div>
            </div>



            <!-- <div class="cajacontenedora-explicacion_recompensas">
                <div class="titulo-recom lexend">
                    <P>Niveles de Recompensas</P>
                </div>
                <div class="linea_recom"></div>
                <div class="contenedor_t_d_r">

                    <div class="caja_recompensas">
                        <div class="titulo_tipo_de_recompensa lexend">EFECTIVO</div>
                        <div class="linea_tarjeta_recompensas"></div>
                        <div class="img_tipo_recompensas tipo_efectivo"></div>
                        <div class="explic_tipo_recompensa roboto">
                            <p>Una cantidad de dinero como agradecimiento por encontrar y devolver a la mascota perdida.
                            </p>
                        </div>
                    </div>

                    <div class="caja_recompensas">
                        <div class="titulo_tipo_de_recompensa lexend">REGALO</div>
                        <div class="linea_tarjeta_recompensas"></div>
                        <div class="img_tipo_recompensas tipo_regalo"></div>
                        <div class="explic_tipo_recompensa roboto">
                            <p>Dar regalos o productos como recompensa por encontrar y devolver a la mascota perdida.</p>
                        </div>
                    </div>
                    <div class="caja_recompensas">
                        <div class="titulo_tipo_de_recompensa lexend">GRACIAS</div>
                        <div class="linea_tarjeta_recompensas"></div>
                        <div class="img_tipo_recompensas tipo_gracias"></div>
                        <div class="explic_tipo_recompensa roboto">
                            <p>Agradecen sin ofrecer recompensa material, expresando su gratitud verbalmente o con gestos.</p>
                        </div>
                    </div>
                </div>
            </div> -->





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

        async function hola(){
            var petId = sessionStorage.getItem("mascota");
            console.log(petId);
            const response = await fetch("api/usuario/buscar/" + petId + "/");
            console.log("holaa"+petId);
            const data = await response.json();
            console.log(data);
            holo(data);
            return data;
        }
        hola();

        async function holo(data){
            var nombre = data[0].nombre;
            var edad = data[0].edad;
            var sexo = data[0].sexo;
            var raza = data[0].raza;
            var imagen = data[0].imagen;
            var estado = data[0].estado;
            var descripcion = data[0].descripcion;
            var fecha = data[0].fecha_desaparicion;
            console.log(nombre);
            console.log(edad);
            console.log(sexo);
            console.log(raza);
            document.getElementById("imagen").style.backgroundImage = "url('img/" + imagen + "')";
            document.getElementById("descripcion").innerHTML = descripcion;
            document.getElementById("date").innerHTML = fecha;
        }

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