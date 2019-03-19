<?php 
require './../../layouts/header.php';
require './../../layouts/menu.php';

require './../../../models/Usuario.php';
$usuario = new Usuario();

	if ($_POST) {
		$id = $_POST['id'];

		if ($_POST['editar'] == 'e') {
			$usuario->set('id', $id);
			$usuario->set('usuario', $_POST['usuario']);
			$usuario->set('contrasena', $_POST['contrasena']);
			$usuario->set('nombres', $_POST['nombre']);
			$usuario->set('apellidos', $_POST['apellidos']);
			$usuario->set('correo', $_POST['correo']);

			$mod = $usuario->modificar();
			if($mod){
				header("Location: ../index.php");
			}
		}
		
	}

	if($_GET){
		$id = $_GET['id'];
		$usuario->set("id", $id);
		$u = $usuario->getUser();
	}

while ($user = $u->fetch_array()) {
 ?>
<form action="" method="post">
	<input type="hidden" name="editar" value="e">
		<fieldset>
			<legend>Modificar Usuario</legend>
			<input type="hidden" value="<?= $id ?>" name="id">
			<label for="usuario">Ingrese su Usuario: </label>
			<input type="text" name="usuario" id="usuario" required="" value="<?= $user['usuario'] ?>"><br>
			<label for="contrasena">Contraseña: </label>
			<input type="password" name="contrasena" id="contrasena" required="" value="">
		</fieldset>
		<fieldset>
			<legend>Datos Personales</legend>
			<label for="nombre">Ingrese su Nombre: </label>
			<input type="text" name="nombre" id="nombre" value="<?= $user['nombres'] ?>"><br>

			<label for="apellidos">Ingrese sus Apellidos: </label>
			<input type="text" name="apellidos" id="apellidos" value="<?= $user['apellidos'] ?>"><br>

			<label for="correo">Ingrese su Correo: </label>
			<input type="email" name="correo" id="correo" required="" value="<?= $user['correo'] ?>"><br>

			<input type="submit" value="Modificar">
			<input type="reset">
		</fieldset>
	</form>

	<?php } 

require './../../layouts/footer.php';

	?>