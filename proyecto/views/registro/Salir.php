<?php 
	require_once './../../config/Sesiones.php';

	$sesion = new Sessiones();
	$sesion->cerrar_sesion();
	header('Location: Ingresar.php');

 ?>