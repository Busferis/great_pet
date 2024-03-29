<?php

if (isset($_GET['id'])){
    $id = $_GET['id'];
}

if (isset($_POST["descripcion"]) && isset($_POST["fecha"])) {
        $con = mysqli_connect("localhost", "great_pet", "admin.greatpet.gecko23", "great_pet");

        $descripcion = $_POST["descripcion"];
        $fecha = $_POST["fecha"];
        // $confirmarPassword = $_POST["confirmar_password"];
        $insertarSql = "UPDATE `mascotas` SET descripcion = '$descripcion', fecha_desaparicion = '$fecha' WHERE id_mascota = '$id'";
        if (mysqli_query($con, $insertarSql)) {
            header("Location: mis_mascotas.php");
            exit();
        } else {
            echo "Error: " . $insertarSql . "<br>" . mysqli_error($con);
        }

    mysqli_close($con);
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
    <link rel="stylesheet" href="css/publicar_busqueda.css">

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

                <div class="titulo_principal lexend">
                    <P>Buscar mascota</P>
                </div>

                <div class="linea_mis_mascotas"></div>

                <form action="" method="POST">
                    <div class="contenedor_tarjetas_mis_mascotas">

                        <div class="caja_contenedor_descripcion">
                            <label for="descripcion" class="titulo_descripcion roboto">Descripción </label><br>
                            <textarea id="descripcion" class="descripcion_ensi roboto" name="descripcion" rows="4"
                                cols="50" oninput="checkLength(this);"
                                placeholder="Aquí puedes contar brevemente como se perdio la mascota, algunas caracteristicas, como por ejemplo que collar lleva, tambien podriamos decir por donde podria estar la mascota"></textarea><br>
                            <span id="contador" class="lexend">160</span>
                        </div>

                        <div class="contenedor_selec_fecha">

                            <div class="fechaaa">
                                <label for="fecha" class="fecha2 roboto">Fecha de desaparición</label>
                                <input type="date" id="fecha" name="fecha" class="roboto">


                            </div>
                            <input type="submit" value="Enviar" class="boton_enviar lexend">
                        </div>

                    </div>
                </form>




            </div>
        </div>

    </main>







</body>
<script>
    function checkLength(textarea) {
        var maxLength = 160;
        var currentLength = textarea.value.length;
        var charactersRemaining = maxLength - currentLength;
        var contador = document.getElementById("contador");

        if (charactersRemaining >= 0) {
            contador.textContent = charactersRemaining ;
        } else {
            textarea.value = textarea.value.slice(0, maxLength);
            contador.textContent = "0";
        }
    }
</script>
<script src="ir_atras.js"></script>
</html>