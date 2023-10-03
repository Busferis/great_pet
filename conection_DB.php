<?php
$mysqli = new mysqli("mattprofe.com.ar","great_pet","admin.greatpet.gecko23","great_pet");
// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>