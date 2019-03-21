<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Mi Pagina</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="./../assets/css/bootstrap.min.css">
</head>
<body>

<?php 
require('./../layouts/sitio/menu.php');
 ?>

 <div class="container">
 	<div class="row">
			<div class="col-md-6" style="margin:0 auto;">
				<form action="../../Controllers/IngresarController.php" method="post">

					<div class="form-group">
						<label for="usuario">Usuario:</label>
						<input type="text" placeholder="Ej. pepito" id="usuario" class="form-control" aria-describedby="help" name="usuario">
						<small id="help" class="form-text form-muted">No ingrese caracteres como (', /, ", *, @)</small>
					</div>

					<div class="form-group">
						<label for="pass">Contraseña</label>
						<input type="password" placeholder="contraseña" id="pass" class="form-control" name="pass">
					</div>

					<div class="form-group">
						<input type="submit" value="Ingresar" class="btn btn-success">
						<input type="reset" class="btn btn-primary">				
					</div>
				</form>
			</div>
		</div>

</div>


	<script src="./../assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="./../assets/js/bootstrap.min.js"></script>	
</body>
</html>