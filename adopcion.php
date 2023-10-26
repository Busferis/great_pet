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
$_SESSION["pagina"] = 2;
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/adopcion.css">
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









    <content>

        <template id="tpl__carnet">
            <div class="contenedor-tarjetas-adopcion-mini-descripcion">
                        <div class="tarjeta1-adopcion-mini-descripcion">
                            <div class="tito_img-perro-en-adopcion">

                                <div class="cajacontenedora_nombre_huesos">
                                    <div class="hueso1"><img class="medida_hueso_centrado" src="img/hueso_izquierdo.svg"
                                            alt=""></div>
                                    <div class="contenedor_nombre_centrado roboto2">Aqui va el nombre</div>
                                    <div class="hueso1"><img class="medida_hueso_centrado" src="img/hueso_derecho.svg"
                                            alt=""></div>
                                </div>

                            </div>

                            <div class="mini-informacion-tarjeta-adopcion">

                                <div class="des-mascota-adopcion-tarjeta">
                                    <div class="caja-ubicaciom_mascota_adopcion_tarjeta">
                                        <div class="ubicaciom_mascota_adopcion_tarjeta">
                                            <i class="material-icons-outlined ">location_on</i>
                                            <div class="asd roboto">Aqui va la localidad</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="des-mascota-adopcion-tarjeta">

                                    <div class="caja_contenedora_dato1">
                                        <div class="caja1_minidescripcion_iz roboto">SEXO</div>
                                    </div>

                                    <div class="linea-recta-medio"></div>

                                    <div class="caja_contededora_dato">
                                        <div class="caja1_minidescripcion_sexo roboto">Aqui va el sexo</div>
                                    </div>

                                </div>
                                <div class="des-mascota-adopcion-tarjeta">
                                    <div class="caja_contenedora_dato1">
                                        <div class="caja1_minidescripcion_iz roboto">RAZA</div>
                                    </div>

                                    <div class="linea-recta-medio"></div>

                                    <div class="caja_contededora_dato">
                                        <div class="caja1_minidescripcion_raza roboto">Aqui va la raza</div>
                                    </div>
                                </div>

                                <div class="des-mascota-adopcion-tarjeta">
                                    <div class="caja_contenedora_dato1">
                                        <div class="caja1_minidescripcion_iz roboto">EDAD</div>
                                    </div>

                                    <div class="linea-recta-medio"></div>

                                    <div class="caja_contededora_dato">
                                        <div class="caja1_minidescripcion_edad roboto">Aqui va la edad</div>
                                    </div>
                                </div>


                            </div>


                            <div class="contenedor_VER-MAS-mascota-adopcion-tarjeta">
                                <a href="adop-mas-info.html">
                                    <div class="VER-MAS-mascota-adopcion-tarjeta roboto2">
                                        Ver Mas
                                    </div>
                                </a>
                            </div>

                        </div>
            </div>
        </template>

        <div class="contenedor2-main-adopcion">
            <div class="caja-fodo-titulo-adopta">
                <div class="contanedora-caja-fodo-titulo-adopta">

                    <div class="logo_negro-fondo-cartel"></div>

                    <div class="img-perro-adopcion">
                    </div>

                    <div class="texto-adopcion-header">
                        <div class="titulo-adopcion-header sigmar">
                            <H5>Mascotas En ADOPCION</H5>
                        </div>
                        <div class="mensaje-adopcion-header releway">
                            <p>¡El hogar se viste de alegría cuando adoptas una mascota!</p>
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
                            <option value="value2" class="options-select">2/11 Meses</option>
                            <option value="value2" class="options-select" selected>1/3 Años</option>
                            <option value="value2" class="options-select">4/6 Años</option>
                            <option value="value2" class="options-select">7/10 Años</option>
                            <option value="value2" class="options-select">11/15 Años</option>
                        </select>


                        <select name="select-filtro-oficial-3" class="SELECT-1 roboto2">
                            <option value="value2" selected class="options-select">Masculino</option>
                            <option value="value3" class="options-select">Femenino</option>
                        </select>


                        <input type="button" value="search" class="material-icons-outlined buscar-filtro-adopcion">


                    </div>

                </div>
                <div class="linea-filtro-adopcion-tarjetas"></div>

                <div id="btn__control">
                    <button id="btn__next">Siguiente</button>
                    <div id="visor__page"></div>
                    <button id="btn__previous">Atras</button>
                </div>

                <div id="listado">

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
                        <div class="caja-des roboto">

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
                    <div class="caja-footer_3-linea"></div>
                    <div class="caja-footer_4-descripcion">
                        <div class="caja-des roboto">

                            <div class="a-footer">
                                <H5>Gmail :</H5>
                                <a><u>greatpet2023@gmail.com</u></a>
                            </div>
                            <div class="a-footer ">
                                <H5 class="hlds">whastapp :</H5>
                                <a><u>+54 9 11 6244 - 4423</u></a>
                            </div>
                            <div class="a-footer">
                                <H5 class="hlds">facebook :</H5>
                                <a><u>Great Pet Arg</u></a>
                            </div>
                        </div>
                    </div>
                </div>




                <!-- <div class="caja-titulo-texto-footer">
                    <div class="caja-footer_2-titulo"></div>
                    <div class="caja-footer_3-linea"></div>
                    <div class="caja-footer_4-descripcion">

                    </div>
                </div> -->
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

            listado.innerHTML = "";

            getAlumnos().then(alumnos => {

                console.log(alumnos);

                alumnos.forEach(row => {
                    createCard(row);
                });

            });
        }

        // peticion a la api en modo get
        async function getAlumnos() {

            const response = await fetch("api/usuario/listByCantPage/10/" + page);

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

            clon.querySelector(".tarjeta1-adopcion-mini-descripcion").setAttribute("id-card", "carnet-" + info.id_adoptable);
            clon.querySelector(".contenedor_nombre_centrado").innerHTML = info.nombre;
            clon.querySelector(".caja1_minidescripcion_sexo").innerHTML = info.sexo;
            clon.querySelector(".caja1_minidescripcion_raza").innerHTML = info.raza;
            clon.querySelector(".caja1_minidescripcion_edad").innerHTML = info.edad;

            clon.querySelector(".tito_img-perro-en-adopcion").setAttribute("src", "https://picsum.photos/200/300?random=" + info.id);

            listado.appendChild(clon)
        }

    </script>
    <script src="menu_responsive.js"></script>

</body>

</html>