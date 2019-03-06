<?php 
session_start();

if ($_SESSION['auth'] != 'si') {
	header('Location: ./../registro/Ingresar.php');
}

require './../layouts/header.php';
require './../layouts/menu.php';
?>



<h1>Productos</h1>




<?php 
require './../layouts/footer.php';
 ?>