<?php 
	if ($_POST) {
		$usuario = $_POST['usuario'];
		$correo = $_POST['correo'];
		$pass = $_POST['contrasena'];
		header('Location: formulario1.php?msg=v');
	}else{
		header('Location: formulario1.php?msg=e');
	}


 ?>