<?php
session_start();
var_dump(($_SESSION["idUsuario"]));
	if (isset($_SESSION["idUsuario"])) {
		var_dump(($_POST["deleteAccount"]));
		if (isset($_POST["deleteAccount"])) {
			$con = mysqli_connect("localhost", "great_pet", "admin.greatpet.gecko23", "great_pet");
	        var_dump($con);
	        $userId = $_SESSION["idUsuario"];
	        var_dump($userId);
	        $sql = "DELETE FROM 'usuarios' WHERE id = '$userId'";
	        var_dump($sql);
	        if (mysqli_query($con, $sql)) {
	            session_unset();
	            session_destroy(); // Destroy the session to log the user out
	            header("Location: login.php"); // Redirect to the login page or any other desired location
	            exit();
	        }
	    }
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="">
        <button type="submit" name="deleteAccount">Eliminar</button>
    </form>
</body>
</html>