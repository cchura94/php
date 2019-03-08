<?php 
session_start();
echo $_SESSION['auth'];
if ($_SESSION['auth'] != 'si') {
	header('Location: ./../registro/Ingresar.php');
}

require './../layouts/header.php';
require './../layouts/menu.php';

require './../../models/Usuario.php';
$usuario = new Usuario();
$array_usuarios =  $usuario->getUsuarios();

if ($_POST) {
	$boton = $_POST['boton'];
	$id = $_POST['id'];

	if ($boton == 'x') {
		$usuario->eliminar_usuario($id);
		header("Location: index.php ");
	}
}
?>
	 <div class="cuerpo">
		<div class="usuarios">
			<table border="1">
				<thead>
					<th>ID</th>
					<th>Nombres</th>
					<th>Apellidos</th>
					<th>Correo</th>
					<th>Usuario</th>
					<th>Fecha Alta</th>
					<th>Acciones</th>
				</thead>
				<tbody>
					<?php while($key = $array_usuarios->fetch_array()){ ?>					
					<tr>
						<td>
							<?php echo $key['id']; ?>					
						</td>
						<td>
							<?php echo $key['nombres']; ?>
						</td>
						<td>
							<?= $key['apellidos'] ?>
						</td>
						<td>
							<?= $key['correo'] ?>
						</td>
						<td>
							<?= $key['usuario'] ?>
						</td>
						<td>
							<?= $key['fecha'] ?>
						</td>
						<td>
							<form action="" method="post">
								<input type="hidden" value="<?= $key['id'] ?>" name="id">
								<input type="submit" value="x" name="boton">
							</form>
							<form action="editar_usuario.php" method="post">
								<input type="hidden" value="<?= $key['id'] ?>" name="id">
								<input type="hidden" name="editar" value="u">
								<input type="submit" value="-">
							</form>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>			
		</div>
	</div>


<?php 
require './../layouts/footer.php';
 ?>
