<!DOCTYPE html>
<html>
<head>
	<title>App</title>
	<link rel="stylesheet" type="text/css" href="./css/estilo.css">

</head>
<body>
	<?php 
	for ($i=1; $i <= 10 ; $i++) { 		
		?>
		<div class='caja'>
			<h2>Titulo <?php echo $i ?> </h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
		</div>

		<?php 
	} 
	$j = 1;
	while ($j <= 10) {		
		?>
		<div class='caja'>
			<h2>Titulo <?php echo $j; ?> </h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
		</div>

	<?php $j++; } ?>


	<?php 
		/* Excepciones Try catch */
		try{
			$x = 5;
			$y = 0;
			if ($y == 0) {
				echo "No se puede dividir entre 0";
			}else{
				$z = $x/$y;
				echo $z;
			}
			
			
		}catch(DivisionByZeroError $e){
		    echo "got $e";
		}

		/*try {
			echo 43/0;
		}
		catch (Exception $e) {
			echo "holaaaaa";
		} catch (ErrorException $e) {
			echo "holaaaaa";
		}catch(DivisionByZeroError $e){
		    echo "got $e";
		}*/

echo("Funciones en php");

function saludo(){
	echo "Hola mundo desde php";
}

saludo();
saludo();
saludo();

function saludo2($n='Cristian')
{
	echo "<h3>Hola: ".$n."</h3>";
}

saludo2("Juan");
saludo2("Oscar");
saludo2("Maria");

function suma($a, $b)
{
	return $a + $b;
}
function resta($a, $b)
{
	return $a - $b;
}
function multiplicacion($a, $b)
{
	return $a * $b;
}
function division($a, $b)
{
	return $a / $b;
}

$s = suma(4, 6);
echo "<h3>$s</h3>";

echo "<h3>".resta(10, 4)."</h3>";




	 ?>
	



</body>
</html>