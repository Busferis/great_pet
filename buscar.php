<?php
    include("conection_DB.php");

    $especie_buscar="gato";
    $sexo_buscar="F";
    $edad_buscar="8";
    $conex=conectar();
    $sql = "SELECT * FROM mascotas WHERE especie = '$especie_buscar' AND sexo = '$sexo_buscar' AND edad = '$edad_buscar';";
    $resultado = $conex->query($sql);

    foreach($resultado as $row){
        $nombre=$row['nombre'];
        $edad=$row['edad'];
        $especie=$row['especie'];
        echo"Nombre:$nombre, Edad:$edad, Especie:$especie<p>";
    }
// Cerrar la conexión
$conex->close();
?>