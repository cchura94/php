<?php 

require './../../layouts/header.php';
require './../../layouts/menu.php';
require './../../../models/Producto.php';
if ($_POST) {
	$producto = new Producto();

	$nombre_archivo = $_FILES['imagen']['name'];
	$tamano_archivo = $_FILES['imagen']['size'];
	$tipo_archivo = $_FILES['imagen']['type'];


	$archivo_temporal = $_FILES['imagen']['tmp_name'];

	$ruta_archivos = $_SERVER['DOCUMENT_ROOT']."/curso-php/proyecto/views/assets/img/";
	move_uploaded_file($archivo_temporal, $ruta_archivos.$nombre_archivo);

	$producto->set('nombre', $_POST['nombre']);
	$producto->set('descripcion', $_POST['descripcion']);
	$producto->set('imagen', $nombre_archivo);
	
	$producto->insertar_producto();


}


?>

<form action="" method="post" enctype="multipart/form-data">

	<input type="text" name="nombre">
	<input type="text" name="descripcion">
	<input type="file" name="imagen">
	<input type="text" name="precio_compra">
	<input type="text" name="precio_venta">
	<input type="text" name="cantidad_stock">
	<input type="text" name="categoria_id">
	<input type="text" name="activo">
	<input type="date" name="fecha_vencimiento">

	<input type="submit">


</form>


<?php 
require './../../layouts/footer.php';
 ?>