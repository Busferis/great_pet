<?php
session_start();

if (isset($_SESSION["idUsuario"])) {
    header("Location: panel.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (isset($_POST["email"]) && isset($_POST["password"])) {
		$con = mysqli_connect("localhost", "great_pet", "admin.greatpet.gecko23", "great_pet");

		$email = $_POST["email"];
        $password = $_POST["password"];

		$sql = "SELECT * FROM `usuarios` WHERE email = '$email' AND password = '$password'";
		$res = mysqli_query($con, $sql);

		if (mysqli_num_rows($res) > 0) {
			$row = mysqli_fetch_assoc($res);
    		$idUsuario = $row['idUsuario'];
    		$_SESSION["idUsuario"] = $idUsuario;
    		$_SESSION["emailUsuario"] = $email;
            $_SESSION["pwdUsuario"] = $password;
	        header("Location: index.html");
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
</head>
<body>
	<h1>webgenerator Fernando Ismael Bustamante</h1>
	<form action="" method="POST">
		<div>
			Direccion de e-mail <input type="text" name="email" required>
			Contraseña <input type="text" name="password" required>
		</div>
		<a href="register.php">Registrarse</a>
		<input type="submit" value="Ingresar">
	</form>
</body>
</html>