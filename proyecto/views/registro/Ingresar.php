<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio de Sesion</title>
</head>
<body>

	<form action="../../Controllers/IngresarController.php" method="post">
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