<?php 
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
</head>
<body>
	<h1>Panel de Control</h1>
	<h2>Bienvenido <?php echo $_SESSION['usuario']; ?></h2>
	
</body>
</html>