<!DOCTYPE html>
<html>
<head>
	<title>Formulario registro</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/estilo.css">
</head>
<body>
	<h2>Registro de Usuario</h2>

	<?php
	if($_GET){
		if ($_GET['msg'] == 'e') {
			?>
			<h3 class="error">
				<?php echo "Ocurrio un error al registrarse"; ?>
			</h3>
			<?php
		}else{	
			?>
			<h3 class="correcto">
				<?php echo "Usuario Registrado Correctamente"; ?>
			</h3>
		<?php 
		}
	} 
	?>

	<form action="./datos.php" method="post">
		<fieldset>
			<legend>Registro de Usuario</legend>

			<label for="usuario">Usuario:</label>
			<input type="text" name="usuario" id="usuario" required><br>

			<label for="correo">Ingrese su correo:</label>
			<input type="email" name="correo" id="correo" required><br>

			<label for="contrasena">Ingrese su Contraseña:</label>
			<input type="password" name="contrasena" id="contrasena" required><br>

			<input type="submit" name="" value="Registrar Usuario">

		</fieldset>		
	</form> 

</body>
</html>