<?php
session_start();

if (isset($_SESSION["idUsuario"])) {
    header("Location: panel.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (isset($_POST["email"]) && isset($_POST["password"])) {
		$con = mysqli_connect("localhost", "great_pet", "admin.greatpet.gecko23", "great_pet");

		if ($con) {
			var_dump($con);
		} else {
			echo "No conectado";
		}

		$email = $_POST["email"];
        $password = md5($_POST["password"]);

		$sql = "SELECT * FROM `usuarios` WHERE email = '$email' AND contraseña = '$password'";

		if ($sql) {
			var_dump($sql);
		} else {
			echo "No SQL";
		}

		$res = mysqli_query($con, $sql);

		if ($res) {
			echo var_dump($sql);
		} else {
			echo "No listo";
		}

		if (mysqli_num_rows($res) > 0) {
			$row = mysqli_fetch_assoc($res);
			$nombreUsuario = $row['nombre'];
    		$_SESSION["nombreUsuario"] = $nombreUsuario;
	        header("Location: panel.php");
	        exit();
	    } else {
	        echo "Correo o contraseña inválidos.";
	    }
	}
}

if (isset($_SESSION["registro_exitoso"])) {
    if ($_SESSION["registro_exitoso"] == true) {
        echo "Registro exitoso. Ahora puedes iniciar sesión.";
        unset($_SESSION["registro_exitoso"]);
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body class="releway">
    <h1 class="roboto">Iniciar sesión</h1>
	<form action="" method="POST">
		<div class="input">
			<input type="text" name="email" placeholder="Correo electronico" required>
			<input type="password" name="password" placeholder="Contraseña" id="myInput" required>
			<div>
                <input type="checkbox" onclick="myFunction()"><label>Mostrar contraseña</label>
            </div>
		</div>
		<div class="botones">
			<a href="registro.php">Registrarse</a>
			<input type="submit" value="Ingresar">
		</div>
        <script>
            function myFunction() {
              var x = document.getElementById("myInput");
              if (x.type === "password") {
                x.type = "text";
              } else {
                x.type = "password";
              }
            //   var y = document.getElementById("myInput2");
            //   if (y.type === "password") {
            //     y.type = "text";
            //   } else {
            //     y.type = "password";
            //   }
            }
        </script>
	</form>
</body>
</html>