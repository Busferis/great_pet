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

require("conection_DB.php");
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


            <form method="GET" action="prueba_adopcion.php">
                <!-- animal - genero - edad -->
                <label for="filtro-especie">Especie:</label>
                <select name="filtro-especie" id="filtro-especie">
                    <option value="todos">Todos</option>
                    <option value="perro">Perro</option>
                    <option value="gato">Gato</option>
                </select>

                <label for="filtro-sexo">Genero:</label>
                <select name="filtro-sexo" id="filtro-sexo">
                    <option value="todos">Todos</option>
                    <option value="macho">Macho</option>
                    <option value="hembra">Hembra</option>
                </select>

            <!--     
                <label for="filtro-edad">Edad:</label>
                <select name="filtro-edad" id="filtro-edad">
                    <option value="">Todos</option>
                    <option value="">2/11 Meses</option>
                    <option value="">1/3 Años</option>
                    <option value="">4/6 Años</option>
                    <option value="">7/10 Años</option>
                    <option value="">11/15 Años</option>
                </select> -->

                <input type="submit" name="filtro">
            </form> 


            <!-- <div class="caja-contenedora-tarjetas-adopcion">
                <div class="caja-filtro-adopcion">
                    <div class="selec-filtro">

                        <form method="post">
                        <select name="select-filtro-oficial-1" class="SELECT-1 roboto2">
                            <option value="perro" selected class="options-select">Perros</option>
                            <option value="gato" class="options-select">Gatos</option>
                        </select>


                        <select name="select-filtro-oficial-2" class="SELECT-1 roboto2">
                            <option value="macho" selected class="options-select">Masculino</option>
                            <option value="hembra" class="options-select">Femenino</option>
                        </select>


                        <input type="submit" value="search" class="material-icons-outlined buscar-filtro-adopcion">
                        </form>

                    </div>

                </div> -->
                <div class="linea-filtro-adopcion-tarjetas"></div>

                <div id="btn_control" class="btn_control">
                    <button id="btn__next">Siguiente</button>
                    <div id="visor__page"></div>
                    <button id="btn__previous">Atras</button>
                </div>

                <div id="listado1">

                </div>

                </div>

            </div>

        </div>

    </content>

<?php  

$especie = isset($_GET['filtro-especie']) ? $_GET['filtro-especie'] : '';
$sexo = isset($_GET['filtro-sexo']) ? $_GET['filtro-sexo'] : '';
$edad = isset($_GET['filtro-edad']) ? $_GET['filtro-edad'] : '';

if ($especie=='todos' && $sexo=='todos') {
    $consulta = "SELECT * FROM mascotas;";
}else if($especie=='todos'){
    $consulta = "SELECT * FROM mascotas WHERE sexo like '$sexo';";
}else if($sexo=='todos'){
    $consulta = "SELECT * FROM mascotas WHERE especie like '$especie';";
}else{
    $consulta = "SELECT * FROM mascotas WHERE especie like '$especie' AND sexo like '$sexo';";    
}
var_dump($consulta);
if ($result = mysqli_query($mysqli, $consulta)) {
    while ($row = mysqli_fetch_array($result)) {
        $sexo = $row['sexo'];
        $nombre = $row['nombre'];
        $especie = $row['especie'];
        echo "<br>Nombre: $nombre, Sexo: $sexo, Especie: $especie";
    }
} else {
    echo "Error en la consulta: " . mysqli_error($mysqli);
}

$result = mysqli_query($mysqli, $consulta);

?>



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

            const response = await fetch("api/usuario/listByCantPage/9/" + page);

            const data = await response.json();

            console.log(data);

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

            listado1.appendChild(clon)
        }

    </script>
    <script src="menu_responsive.js"></script>

</body>

</html>