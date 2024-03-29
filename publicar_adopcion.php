<?php

if (isset($_GET['id'])){
    $id = $_GET['id'];
}

if (isset($_POST["descripcion"])) {
        $con = mysqli_connect("localhost", "great_pet", "admin.greatpet.gecko23", "great_pet");

        $descripcion = $_POST["descripcion"];
        // $confirmarPassword = $_POST["confirmar_password"];
        $insertarSql = "UPDATE `adoptables` SET descripcion = '$descripcion' WHERE id_adoptable = '$id'";
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/publicar_adopcion.css">

    <title>Great Pet</title>
</head>

<body>



    <main>

        <div class="contenedor-MAS-main-adopcion">

            <div class="caja_principal1">

                <div class="titulo_principal lexend">
                    <P>Publicar Adopcion</P>
                </div>

                <div class="linea_mis_mascotas"></div>




                <form action="" method="POST">
                    <div class="contenedor_tarjetas_mis_mascotas">

                        <div class="caja_contenedor_descripcion">
                            <label for="descripcion" class="titulo_descripcion roboto">Descripción </label><br>
                            <textarea id="descripcion" class="descripcion_ensi roboto" name="descripcion" rows="4"
                                cols="50" oninput="checkLength(this);"
                                placeholder="Aquí puedes escribir una descripcion de la mascota"></textarea><br>
                            <span id="contador" class="lexend">200</span>
                        </div>

                        <input type="submit" value="Enviar" class="boton_enviar lexend">

                    </div>
                </form>




            </div>
        </div>

    </main>

</body>
<script>
    function checkLength(textarea) {
        var maxLength = 200;
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
</html>