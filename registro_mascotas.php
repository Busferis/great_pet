<?php

session_start();

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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/registrar_mascota.css">

    <title>Great Pet</title>
</head>

<body>

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
                            
                                
                                <input type="file" name="file1" id="file1" style="display: none;">
                                <label for="file1" class="custom-file-upload">
                                        <div class="subir_imagen">
                                            <span class="material-icons-outlined subir_imagen_icono">
                                                drive_folder_upload
                                            </span>
                                        </div>
                                </label>
                                </input>
                                
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
    <script src="ir_atras.js"></script>
</body>
</html>