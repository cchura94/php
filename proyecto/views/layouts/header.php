<?php

session_start();
if ($_SESSION['auth'] != 'si') {
	header('Location: ./../registro/Ingresar.php');
}

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Mi pagina | Admin</title>
	<link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/curso-php/proyecto/views/assets/css/bootstrap.min.css">
</head>
<body>

	<div class="header">
		<h1>Panel de Control</h1>
		<h2>Administración de Productos ABC</h2>
	</div>