<!DOCTYPE html>
<html>
<head>
    <title>Formulario PHP</title>
</head>
<body>
    <form method="post">
        <select name="select-filtro-oficial-1" class="SELECT-1 roboto2">
            <option value="perro" selected class="options-select">Perros</option>
            <option value="gato" class="options-select">Gatos</option>
        </select>
        <select name="select-filtro-oficial-2" class="SELECT-1 roboto2">
            <option value="macho" class="options-select">Macho</option>
            <option value="Hembra" class="options-select">Hembra</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php
    include("conection_DB.php");
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valorSeleccionado = $_POST["select-filtro-oficial-1"];
    echo "El valor seleccionado es: " . $valorSeleccionado;
}
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valorSeleccionado2 = $_POST["select-filtro-oficial-2"];
    echo "<br>El valor seleccionado es: " . $valorSeleccionado2;
}
    $especie_buscar=$valorSeleccionado;
    $sexo_buscar=$valorSeleccionado2;
    $edad_buscar="8";
    $conex=conectar();
    $sql = "SELECT * FROM mascotas WHERE especie = '$especie_buscar' AND sexo = '$sexo_buscar' /*AND edad = '$edad_buscar'*/;";
    $resultado = $conex->query($sql);

    foreach($resultado as $row){
        $nombre=$row['nombre'];
        $edad=$row['edad'];
        $especie=$row['especie'];
        echo"<br>Nombre:$nombre, Edad:$edad, Especie:$especie";
    }
// Cerrar la conexión
$conex->close();
?>