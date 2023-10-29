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
if (isset($_SESSION["localidad"])) {
    $localidad = $_SESSION["localidad"];
}

$one=false;
$two=false;

if (isset($_POST["nombre"]) && isset($_POST["edad"]) && isset($_POST["sexo"]) && isset($_POST["especie"]) && isset($_POST["raza"])) {
        $con = mysqli_connect("localhost", "great_pet", "admin.greatpet.gecko23", "great_pet");

        $nombre = $_POST["nombre"];
        $edad = $_POST["edad"];
        $sexo = $_POST["sexo"];
        $especie = $_POST["especie"];
        $raza = $_POST["raza"];

        $sql = "SELECT * FROM `mascotas` WHERE nombre = '$nombre'";
        $res = mysqli_query($con, $sql);

        if (mysqli_num_rows($res) > 0) {
            echo "Esta mascota ya está registrada.";
        } else {
            $insertarSql = "INSERT INTO `mascotas` (id_usuario, nombre, edad, sexo, especie, raza, localidad) VALUES ('$id_usuario', '$nombre', '$edad', '$sexo', '$especie', '$raza', '$localidad')";
            if (mysqli_query($con, $insertarSql)) {
                $one=true;
            } else {
                echo "Error en el registro. Por favor, inténtalo de nuevo.";
            }
        }

        if (isset($_FILES["file1"]) && $_FILES["file1"]["error"] === 0) {
            $nom_archivo=$_FILES['file1']['name'];
            // var_dump($ruta);
            $ruta="img/".$nom_archivo;
            $archivo=$_FILES['file1']['tmp_name'];
            $subir=move_uploaded_file($archivo, $ruta);
            // var_dump($subir);
            $ruta2="../img/".$nom_archivo;
            $sentencia_img="UPDATE mascotas SET imagen='".$ruta2."' WHERE nombre='".$_POST['nombre']."' ";
            // var_dump($sentencia_img);
            $con->query($sentencia_img) or die ("Error al subir imagen: ".mysqli_error($con));
            $two=true;

        } else {
            // Handle the case when no file was uploaded or an error occurred during upload
            echo "No file uploaded or an error occurred during upload.";
        }

        if ($one==true && $two==true) {
            header("Location: mis_mascotas.php");
            exit();
        }

    mysqli_close($con);
}
else{
    // echo "Falta algo";
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
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/registrar_mascota.css">
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


    <main>
        <div class="contenedor-MAS-main-adopcion">
            <div class="caja_principal1">

                 <button onclick="goBack()" class="boton_ir_atras"><span class="material-icons-outlined flecha_ir_atras">
                    arrow_back
                </span>
                </button>

                <form action="" method="POST" enctype="multipart/form-data" class="estructura_from">

                    <div class="titulo_principal lexend">
                        <P>Registrar mascota</P>
                    </div>

                    <div class="linea_mis_mascotas"></div>

                    <div class="contenedor_tarjetas_mis_mascotas">

                        <div class="contenedores_columnas1">
                            <div class="caja_tipo_de_especie">
                                <div class="titulo_de_tipo_de_especie roboto"><p>Tipo de especie</p></div>
                                <div class="caja_logos_perro_gato">
                                    <div class="boton">
                                        <input type="radio" id="especie_1" name="especie" value="Gato">
                                        <label for="especie_1" class="lbl-switch"><p class="perro_gato_switch garo_arreglo lexend">Gato</p></label>
                                    </div>
                            
                                    <div class="boton">
                                        <input type="radio" id="especie_2" name="especie" value="Perro">
                                        <label for="especie_2" class="lbl-switch otra_imgen_lbl-switch"><p class="perro_gato_switch lexend">Perro</p></label>
                                    </div>

                                </div>
                            </div>

                            <div class="caja_subir_foto">

                                <div class="titulo_agregar_img roboto">
                                    Subir Imagen
                                </div>
                            
                                
                                <div class="subir_imagen">
                                    <label for="file1" class="custom-file-upload">
                                        <div class="subir_imagen">
                                            <div class="conenedor_muestra_img">
                                                <img id="imagen_seleccionada"  >                                                            
                                            </div>
                                            <span class="material-icons-outlined subir_imagen_icono">
                                                drive_folder_upload
                                            </span>
                                        </div>
                                    </label>
                                    <input type="file" name="file1" id="file1" style="display: none;">
                                </div>

                                










                            </div>
                        </div>

                        <div class="contenedores_columnas2">
                            <div class="caja_informacion">
                                <div class="titulo_NRES roboto">
                                    Nombre 
                                </div>
                                <div >
                                    <input type="text" class="input_text" name="nombre">
                                </div>
                            </div>
                            <div class="caja_informacion">
                                <div class="titulo_NRES roboto">
                                    Raza 
                                </div>
                                <div >
                                    <input type="text" class="input_text" name="raza">
                                </div>
                            </div>
                            <div class="caja_informacion">
                                <div class="titulo_NRES roboto">
                                    Edad 
                                </div>
                                <div >
                                    <input type="number" class="input_text" name="edad">
                                </div>
                            </div>
                            <div class="caja_informacion">

                                <div class="titulo_NRES roboto">
                                    Sexo 
                                </div>
                                <div >
                                    <select id="sexo" name="sexo">
                                      <option value="">Selecciona una opción</option>
                                      <option value="Macho">Macho</option>
                                      <option value="Hembra">Hembra</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="Guardar" class="lexend">
                </form>
            </div>
        </div>

    </main>

    <script>
        // Obtén el elemento input de tipo archivo
        const fileInput = document.getElementById("file1");

        // Obtén el elemento de imagen donde se mostrará la imagen seleccionada
        const imagenSeleccionada = document.getElementById("imagen_seleccionada");
        
        // Escucha el evento 'change' en el input de tipo archivo
        fileInput.addEventListener("change", function () {
    // Verifica si se ha seleccionado un archivo
    if (fileInput.files.length > 0) {
        // Obtén el primer archivo seleccionado (asumiendo que solo se permite seleccionar uno)
        const selectedFile = fileInput.files[0];

        // Crea una URL temporal para la imagen seleccionada
        const imageURL = URL.createObjectURL(selectedFile);

        // Establece la fuente de la imagen para mostrarla en la caja .subir_imagen
        imagenSeleccionada.src = imageURL;
    } else {
        // Si el usuario cancela la selección, limpia la imagen
        imagenSeleccionada.src = "";
    }
});

    </script>

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
</body>
</html>