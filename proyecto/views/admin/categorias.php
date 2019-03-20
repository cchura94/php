<?php 

require './../layouts/header.php';
require './../layouts/menu.php';

require './../../models/Categoria.php';

$categoria = new Categoria();
$array_categorias = $categoria->lista_categorias();
//print_r($array_categorias);

 ?>

<table border="1">
	<thead>
		<th>ID</th>
		<th>NOMBRE</th>
		<th>DESCRIPCION</th>
	</thead>
	<tbody>
		<?php while($key = $array_categorias->fetch_array()){ ?>
		<tr>
			<td> <?php echo $key['id']; ?>  </td>
			<td><?php echo $key['nombre']; ?> </td>
			<td><?= $key['descripcion'] ?> </td>
		</tr>

		<?php } ?>

	</tbody>
</table>






 <?php 
require './../layouts/footer.php';
  ?>