<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registrarse</title>
	<?php 

	if ($_POST) {
		require './../../models/Usuario.php';
		$usuario = new Usuario();

		$usuario->set('usuario', $_POST['usuario']);
		$usuario->set('contrasena', $_POST['contrasena']);

		$usuario->set('nombres', $_POST['nombre']);
		$usuario->set('apellidos', $_POST['apellidos']);
		$usuario->set('correo', $_POST['correo']);

		$reg = $usuario->Registrarse();
		if ($reg == true) {
			header('Location: Ingresar.php?msg=r');
		}
	}
	else{
		//echo "NOOOOO";
	}


	 ?>



</head>
<body>

	<form action="" method="post">
		<fieldset>
			<legend>Registro de Usuario</legend>
			<label for="usuario">Ingrese su Usuario: </label>
			<input type="text" name="usuario" id="usuario" required=""><br>
			<label for="contrasena">Contraseña: </label>
			<input type="password" name="contrasena" id="contrasena" required="">
		</fieldset>
		<fieldset>
			<legend>Datos Personales</legend>
			<label for="nombre">Ingrese su Nombre: </label>
			<input type="text" name="nombre" id="nombre"><br>

			<label for="apellidos">Ingrese sus Apellidos: </label>
			<input type="text" name="apellidos" id="apellidos"><br>

			<label for="correo">Ingrese su Correo: </label>
			<input type="email" name="correo" id="correo" required=""><br>

			<input type="submit" value="Registrarse">
			<input type="reset">
		</fieldset>
		
	</form>
	
</body>
</html>