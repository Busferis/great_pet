<?php 
	include 'Mailer/src/PHPMailer.php';
	include 'Mailer/src/SMTP.php';
	include 'Mailer/src/Exception.php';
	include 'libs/EmailEngine.php';


	$mail =file_get_contents('correos/confirmacion.html');
	$mail = str_replae('{TOKEN}',TOKEN,$mail)
	$email = new EmailEngine();
	$email->send('delucaman1@gmail.com','Activacion de cuenta greatpet ',$mail);


?>