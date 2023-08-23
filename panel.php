<?php
session_start();

if (isset($_SESSION["nombreUsuario"])) {
    $nombreUsuario = $_SESSION["nombreUsuario"];
} else{
    header("Location: login.php");
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/color.css">
    <title>Great Pet</title>
</head>

<body>
    <header>
        <div class="headersi">
            <a href="index.html">
                <img class="img-header FOTO-LOGO" src="img/logo_definitivo.png" alt="s">
            </a>
            <div class="navegacion roboto">
                <a class="TEXTO-LINK" href="#">
                    <h3>Inicio</h3>
                </a>
                <a class="TEXTO-LINK" href="adopcion.html">
                    <h3>Adopcion</h3>
                </a>
                <a class="TEXTO-LINK" href="#">
                    <h3>Busqueda</h3>
                </a>
                <a class="TEXTO-LINK" href="#">
                    <h3>QR</h3>
                </a>
                <a class="TEXTO-LINK" href="servicios.html">
                    <h3>Servicios</h3>
                </a>
            </div>
            <div class="redesu roboto">
                <?php
                    echo '<p>Bienvenido</p>';
                    echo '<a href="perfil.php"><h1>'.$nombreUsuario.'</h1></a>';
                    echo '<a href="logout.php">
                            <span class="material-icons-outlined">
                                logout
                            </span>
                          </a>';
                ?>
            </div>
        </div>
    </header>


    <main>
        <div class="contenedor1-main-index">
            <div class="caja1">
                <div class="CAJA-PERRO-CARTEL-ONDA">
                    <div class="caja2">
                        <img class="imagen-perro-cartel" src="img/perrocartel.png" alt="">
                        <div class="contenedor-descripcion">
                            <img class="logo-caja" src="img/logo_definitivo.png" alt="s">
                            <div class="linea"></div>
                            <div class="descripcion-greatpet releway">
                                <p>GREAT PET es un proyecto que se dedica al cuidado y bienestar de los animales
                                    domésticos. La página ofrece información sobre cómo adoptar o dar en adopción
                                    perros, gatos y otros animales. Además, se preocupa por los animales perdidos o
                                    encontrados, y ofrece una sección donde los usuarios pueden buscar perros perdidos o
                                    informar sobre perros encontrados. Así como una Atiendas de mascotas. Todos estos
                                    servicios son cuidadosamente seleccionados para garantizar que nuestros gran amigos
                                    peludos reciban la mejor atención posible.</p>
                            </div>

                        </div>
                    </div>
                    <svg preserveAspectRatio="none" class="ondas" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 1440 320">
                        <path fill="#fcf2eb" fill-opacity="1"
                            d="M0,160L26.7,186.7C53.3,213,107,267,160,282.7C213.3,299,267,277,320,240C373.3,203,427,149,480,154.7C533.3,160,587,224,640,224C693.3,224,747,160,800,160C853.3,160,907,224,960,240C1013.3,256,1067,224,1120,202.7C1173.3,181,1227,171,1280,160C1333.3,149,1387,139,1413,133.3L1440,128L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z">
                        </path>
                    </svg>
                </div>
            </div>
        </div>


        <div class="contenedor2-main-index">
            <div class="tarjetas">
                <div class="tarj">

                    <div class="logotipo-tarjeta">
                        <div class="borde1">
                            <div class="borde2">
                                <img class="img-tarjeta1" src="img/adopcion-tarjeta.png" alt="Adopcion">
                            </div>
                        </div>
                    </div>

                    <div class="texto-tarjeta">
                        <div class="titulo-tarjeta lexend">Adopcion</div>
                        <div class="parrafo-tarjeta roboto">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                            sed diam Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diamLorem ipsum dolor
                            sit amet, c adipiscing</div>
                    </div>


                    <a class="ir-link" href="adopcion.html">
                        <div class="caja-ir">
                            <h3 class="ir sigmar">IR</h3>
                        </div>
                    </a>

                </div>
                <div class="tarj">
                    <div class="logotipo-tarjeta">
                        <div class="borde1">
                            <div class="borde2">
                                <img class="img-tarjeta2" src="img/busqueda-tarjeta.png" alt="Adopcion">
                            </div>
                        </div>
                    </div>

                    <div class="texto-tarjeta">
                        <div class="titulo-tarjeta lexend">Busqueda</div>
                        <div class="parrafo-tarjeta roboto">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                            sed diam Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diamLorem ipsum dolor
                            sit amet, c adipiscing </div>
                    </div>
                    <a class="ir-link" href="#">
                        <div class="caja-ir">
                            <h3 class="ir sigmar">IR</h3>
                        </div>
                    </a>
                </div>


                <div class="tarj">
                    <div class="logotipo-tarjeta">
                        <div class="borde1">
                            <div class="borde2">
                                <img class="img-tarjeta3" src="img/QR-tarjeta.png" alt="Adopcion">
                            </div>
                        </div>
                    </div>

                    <div class="texto-tarjeta">
                        <div class="titulo-tarjeta lexend">QR</div>
                        <div class="parrafo-tarjeta roboto">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                            sed diam Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diamLorem ipsum dolor
                            sit amet, c adipiscing </div>
                    </div>

                    <a class="ir-link" href="#">
                        <div class="caja-ir">
                            <h3 class="ir sigmar">IR</h3>
                        </div>
                    </a>
                </div>

                <div class="tarj">
                    <div class="logotipo-tarjeta">
                        <div class="borde1">
                            <div class="borde2">
                                <img class="img-tarjeta4" src="img/servicios.png" alt="Adopcion">
                            </div>
                        </div>
                    </div>

                    <div class="texto-tarjeta">
                        <div class="titulo-tarjeta lexend">Servicios</div>
                        <div class="parrafo-tarjeta roboto">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                            sed diam Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diamLorem ipsum dolor
                            sit amet, c adipiscing </div>
                    </div>

                    <a class="ir-link" href="servicios.html">
                        <div class="caja-ir">
                            <h3 class="ir sigmar">IR</h3>
                        </div>
                    </a>
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
                                <H5 >Gmail :</H5>
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




                <div class="caja-titulo-texto-footer">
                    <div class="caja-footer_2-titulo"></div>
                    <div class="caja-footer_3-linea"></div>
                    <div class="caja-footer_4-descripcion">
                        
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>