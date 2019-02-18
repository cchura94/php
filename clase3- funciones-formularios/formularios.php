<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
</head>
<body>

	<?php 

		if ($_GET) {
			echo "<h1>".$_GET['nombre']."</h1>";
			echo "<h1>".$_GET['password']."</h1>";
		}
		if($_POST){
			echo $_POST['nombre'];
			echo $_POST['password'];
		}	
	 ?>
<h2>GET</h2>
	<form action="" method="GET">
		<input type="text" name="nombre"><br>
		<input type="password" name="password"><br>
		<input type="submit" name="boton">
	</form>
	<hr>
<h2>POST</h2>
	<form action="" method="POST">
		<input type="text" name="nombre"><br>
		<input type="password" name="password"><br>
		<input type="submit" name="boton">
	</form>

</body>
</html>