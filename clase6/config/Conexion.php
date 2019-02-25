<?php 
	require_once 'Config.php';
	
	$con =new mysqli($host, $usuario, $password, $nombrebd);
	if ($con->connect_error) {
		die("Fallo Conexion: " . $con->connect_error);
	}


 ?>