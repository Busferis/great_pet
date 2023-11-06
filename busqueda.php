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
$_SESSION["pagina"] = 3;
// var_dump($_SESSION["pagina"]);

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









    <content>

        <template id="tpl__carnet">
            <div class="tarjeta1-busqueda-mini-descripcion">

                <div class="tito_img-perro-en-busqueda img2">
                    <!-- <div class="tipo_de_recompensas"></div> -->

                    <div class="cajacontenedora_nombre">
                        <div class="contenedor_nombre_centrado roboto2">Dona</div>
                    </div>

                </div>


                <div class="mini-informacion-tarjeta-busqueda">

                    <div class="des-mascota-busqueda-tarjeta localidad-dato-busqueda">

                        <div class="caja-ubicaciom_mascota_busqueda_tarjeta">
                            <div class="ubicaciom_mascota_busqueda_tarjeta ">
                                <i class="material-icons-outlined icono_location">location_on</i>
                                <div class="ubicacion roboto">Tortuguitas</div>
                            </div>
                        </div>

                        <div class="caja_contenedora_dato1_responsive des-mascota-busqueda-tarjeta tamoño-defauld-dato">

                            <div class="caja_contenedora_dato1 caja_contenedora_dato1_icono_loc">
                                <div class="caja1_minidescripcion_iz roboto"><i class="material-icons-outlined icono_location">location_on</i></div>
                            </div>

                            <div class="linea-recta-medio-tarjetas linea-recta-medio-tarjetas_localidad"></div>

                            <div class="caja_contededora_dato">
                                <div class="caja1_minidescripcion_der roboto">Tortuguitas</div>
                            </div>

                        </div>
                    </div>


                    <div class="des-mascota-busqueda-tarjeta tamoño-defauld-dato">

                        <div class="caja_contenedora_dato1 ">
                            <div class="caja1_minidescripcion_iz roboto">Sexo</div>
                        </div>

                        <div class="linea-recta-medio-tarjetas"></div>

                        <div class="caja_contededora_dato">
                            <div class="caja1_minidescripcion_der1 roboto">Femenino</div>
                        </div>

                    </div>

                    <div class="des-mascota-busqueda-tarjeta tamoño-defauld-dato">

                        <div class="caja_contenedora_dato1 ">
                            <div class="caja1_minidescripcion_iz roboto">Raza</div>
                        </div>

                        <div class="linea-recta-medio-tarjetas"></div>

                        <div class="caja_contededora_dato">
                            <div class="caja1_minidescripcion_der2 roboto">Maltés</div>
                        </div>

                    </div>

                    <div class="des-mascota-busqueda-tarjeta tamoño-defauld-dato">

                        <div class="caja_contenedora_dato1 ">
                            <div class="caja1_minidescripcion_iz roboto">Edad</div>
                        </div>

                        <div class="linea-recta-medio-tarjetas"></div>

                        <div class="caja_contededora_dato">
                            <div class="caja1_minidescripcion_der3 roboto">5 meses</div>
                        </div>

                    </div>



                </div>

                <div class="contenedor_VER-MAS-mascota-adopcion-tarjeta">
                    <a href="mas-info-busqueda.php" onclick="idmascota(this)">
                        <div class="VER-MAS-mascota-adopcion-tarjeta roboto2">
                            Ver Mas
                        </div>
                    </a>
                </div>


            </div>
        </template>

        <div class="contenedor2-main-adopcion">

            <div class="contenedor_cartel_busqueda">
                <div class="cartel_mensaje-busqueda">
                    <div class="logo_negro-fondo-cartel"></div>
                    <div class="img_cartel_mensaje"></div>

                    <div class="titulo_mensaje_busqueda">
                        <div class="titulo-cartel sigmar">
                            Mascotas Perdidas
                        </div>
                        <div class="mensaje-cartel releway">
                            ¡Todos juntos, Haremos posible el gran encuentro!
                        </div>
                    </div>
                </div>
            </div>


            <div class="caja-contenedora-tarjetas-adopcion">
                <div class="caja-filtro-adopcion">
                    <div class="selec-filtro">

                        <select name="select-filtro-oficial-1" class="SELECT-1 roboto2">
                            <option value="value2" selected class="options-select">Perros</option>
                            <option value="value3" class="options-select">Gatos</option>
                        </select>

                        <select name="select-filtro-oficial-2" class="SELECT-1 roboto2">
                            <option value="value2" class="options-select" selected>Malvinas Argentinas</option>
                            <option value="value2" class="options-select">Pilar</option>
                            <option value="value2" class="options-select">José C. paz</option>
                        </select>


                        <select name="select-filtro-oficial-3" class="SELECT-1 roboto2">
                            <option value="value2" selected class="options-select">Tortuguitas</option>
                            <option value="value2" class="options-select">Grand Bourg</option>
                            <option value="value2" class="options-select">Villa de Mayo</option>
                            <option value="value3" class="options-select">Los Polvorines</option>
                            <option value="value3" class="options-select">Pablo Nogués</option>
                        </select>


                        <input type="button" value="search" class="material-icons-outlined buscar-filtro-adopcion">


                    </div>
                </div>

                <div class="linea-filtro-adopcion-tarjetas"></div>

                <div id="btn__control" class="btn__control">
                    <button id="btn__previous" class="boton_s_a roboto">Atras</button>
                    <div id="visor__page" class="numero_pestaña roboto">1</div>
                    <button id="btn__next" class="boton_s_a roboto">Siguiente</button>
                </div>

                <div id="listado1">
                    
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

        let page = 1;

        refreshPage();

        btn__next.addEventListener("click", e => {
            page++;

            refreshPage();
        })

        btn__previous.addEventListener("click", e => {

            if (page > 1) {
                page--;
            }

            refreshPage();

        })


        function refreshPage() {
            visor__page.innerHTML = page;

            listado1.innerHTML = "";

            getAlumnos().then(alumnos => {

                console.log(alumnos);

                alumnos.forEach(row => {
                    createCard(row);
                });

            });
        }

        // peticion a la api en modo get
        async function getAlumnos() {

            const response = await fetch("api/usuario/listByCantPageBusqueda/9/" + page);

            const data = await response.json();

            return data;
        }


        // peticion a la api en modo post

        async function postUsuario(info) {

            let frm = new FormData;

            frm.append("name", info.name);


            let config = {
                body: frm,
                method: "POST"
            }

            const response = await fetch("api/usuario/add", config);

            const data = await response.json();

            return data;
        }


        // crear una plantilla
        function createCard(info) {
            console.log(info);
            const tpl = tpl__carnet.content
            const clon = tpl.cloneNode(true);

            clon.querySelector(".tarjeta1-busqueda-mini-descripcion").setAttribute("id-card", info.id_mascota);
            clon.querySelector(".contenedor_nombre_centrado").innerHTML = info.nombre;
            clon.querySelector(".caja1_minidescripcion_der1").innerHTML = info.sexo;
            clon.querySelector(".caja1_minidescripcion_der2").innerHTML = info.raza;
            clon.querySelector(".caja1_minidescripcion_der3").innerHTML = info.edad;
            clon.querySelector(".caja1_minidescripcion_der").innerHTML = info.localidad;
            clon.querySelector(".tito_img-perro-en-busqueda").style.backgroundImage = "url('img/" + info.imagen + "')";
            // clon.querySelector(".ubicacion").innerHTML = info.localidad /*+ ", Malvinas Argentinas"*/; 
            // clon.querySelector(".asde").innerHTML = info.localidad /*+ ", Malvinas Argentinas"*/;             
            // clon.querySelector(".caja1_minidescripcion_sexo").innerHTML = info.sexo;
            // clon.querySelector(".caja1_minidescripcion_raza").innerHTML = info.raza;
            // clon.querySelector(".caja1_minidescripcion_edad").innerHTML = info.edad;

            // clon.querySelector(".tito_img-perro-en-adopcion").setAttribute("src", "https://picsum.photos/200/300?random=" + info.id);
            // clon.querySelector(".tito_img-perro-en-adopcion").style.backgroundImage = "url('imgenes_perros/" + info.imagen + "')";


            listado1.appendChild(clon)
        }

        async function idmascota(element){
            const petCard = event.currentTarget.closest('.tarjeta1-busqueda-mini-descripcion');
            const petId = petCard.getAttribute('id-card');
            const response = await fetch("api/usuario/buscar/" + petId + "/");

            console.log("holaa"+petId);

            const data = await response.json();

            sessionStorage.setItem("mascota", JSON.stringify(data));

            console.log(data);

            return data;
        }

    </script>

    <script src="menu_responsive.js"></script>

</body>

</html>