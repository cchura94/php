<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio de Sesion</title>
</head>
<body>

	<?php 
		require_once('./../../models/Usuario.php');
		require_once('./../../config/Sesiones.php');
		if ($_POST) {
			$u = $_POST['usuario'];
			$p = $_POST['pass'];

			$usuario = new Usuario();
			$usuario->set('usuario', $u);
			$usuario->set('contrasena', $p);

			if ($usuario->ingresar()) {
				$sesion = new Sessiones();
				$sesion->setAuth("si");
				$sesion->setUsuario($u);
				$sesion->crear_sesion();
				header("Location: ../admin/index.php");
			}else{
				header("Location: ingresar.php");
			}
			
		}

	 ?>


	<form action="" method="post">
		<fieldset>
			<legend>Inicio de Sesion</legend>
			<input type="text" name="usuario"><br>
			<input type="password" name="pass"><br>
			<input type="submit" value="Ingresar">
			<input type="reset">
		</fieldset>
	</form>
	
</body>
</html>