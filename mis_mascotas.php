<?php

    session_start();

    if (isset($_SESSION["id_usuario"])) {
        $id_usuario = $_SESSION["id_usuario"];
    }
    if (isset($_SESSION["localidad"])) {
        $localidad = $_SESSION["localidad"];
    }

    var_dump($id_usuario);

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
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/mis_mascotas.css">
    <link rel="stylesheet" href="css/footer.css">


    <title>Great Pet</title>
</head>

<body>

    <template id="tpl__carnet">

        <div class="tarjetas_mascotas_mis_mascotas">

            <div class="img_tarjeta_mis_mascota"></div>

            <div class="contenedor_nombre_mis_mascota">
                <div class="nombre_mascota_tarjeta_mis_mascotas lexend">
                    <p class="nombre_mascota">Nombre</p>
                </div>
                <div class="contenedor_ver_delet">
                    <a href="#">
                        <div class="contenedor_generador_mis_mascotas roboto2">
                            <p>Ver</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="contenedor_generador_mis_mascotas roboto2">
                            <span class="material-symbols-outlined delete">
                                delete
                            </span>
                        </div>
                    </a>
                </div>
            </div>

        </div>

    </template>


    <content>

        <div class="contenedor-MAS-main-adopcion">

            <div class="caja_principal1">

                <div class="titulo_principal lexend">
                    <P>Mis Mascotas</P>
                </div>

                <div class="linea_mis_mascotas"></div>


                <div class="contenedor_tarjetas_mis_mascotas">

                    <div id="listado">
                        
                    </div>

                    <!-- <a href="registro_mascotas.php">
                        <div class="tarjetas_mascotas_mis_mascota">
                            <div class="fondo_tarjeta_agregar_mascota">

                                <div class="contenedor_mas_a_m">
                                    <span class="material-icons-outlined mas_añadir_m">
                                        add
                                    </span>

                                    <div class="texto_añadir_mascota roboto2">
                                        <P>AÑADIR MASCOTA</P>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </a> -->

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

        refreshPage();

        function refreshPage(){

                listado.innerHTML = "";

                getAlumnos().then(alumnos => {

                    console.log(alumnos);

                    alumnos.forEach(row => {
                        createCard(row);
                    });
                    listado.innerHTML = listado.innerHTML + '<a href="registro_mascotas.php"><div class="tarjetas_mascotas_mis_mascota"><div class="fondo_tarjeta_agregar_mascota"><div class="contenedor_mas_a_m"><span class="material-icons-outlined mas_añadir_m">add</span><div class="texto_añadir_mascota roboto2"><P>AÑADIR MASCOTA</P></div></div></div></div></a>';

                });
        }

        // peticion a la api en modo get
        async function getAlumnos(){

            const response = await fetch("api/usuario/listAll/");

            const data = await response.json();

            return data;
        }


        // peticion a la api en modo post

        async function postUsuario(info){

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
        function createCard (info) {
                console.log(info);
                const tpl = tpl__carnet.content
                const clon = tpl.cloneNode(true);

                clon.querySelector(".nombre_mascota").innerHTML = info.nombre;
                clon.querySelector(".img_tarjeta_mis_mascota").style.backgroundImage = "url('img/" + info.imagen + "')";


                listado.appendChild(clon)
        }

    </script>

</body>

</html>