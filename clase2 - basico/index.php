<?php 
	/* Este comentarios es
		un bloque..
		.......
		............... */

	//Este es una linea de comentario


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP</title>
</head>
<body>
	<h1>PHP</h1>
<?php 
	$a = 3;
	$cadena = "Esta es una variable tipo cadena";
	$cadena2 = "cadena dos";
	$cadena3 = "cadena tres"; //cadena
	$entero = 6; //entero
	$monto = 3.99; //float
	$salto = "<br>";
	$espacio = " ";

	echo "hola este es un mensaje",
	 " este es otro mensaje",
	  "tercer mensaje";
	echo "<br>".$cadena; // concatenando dos cadenas
	echo $salto, $cadena, $cadena2, $cadena3;
	echo $salto	. $cadena . $cadena2 . $cadena3;
	echo $salto . $cadena2 . $espacio . $entero;
	echo $salto . $cadena2 . $espacio . $monto;
	echo($salto . $entero . $espacio . $monto);

	//print("uno", "dos","tres");// Error
	print($salto."uno".$salto); //correcto
	//Variable de una variable
	$hola = "algo";
	$a = "hola";
	$mundo = "mi mundo";
	$$a = "mundo";
	$$$a = "hola";
	print($a.$salto);
	print($$a.$salto);
	print($$$a.$salto);
	print($$$$a.$salto);

	//Operadores artimeticos
	echo "<h2>Operadores artmeticos</h2>";
	$x = 5;
	$y = 4;
	$z = 0;

	$z = $x + $y;
	echo $z.$salto;
	$x += $y; //$x ya vale 9
	echo $x.$salto;
	//Resta
	$z = $x - $y;
	echo $z.$salto;
	$x -= $y; //$x ya vale 5
	echo $x.$salto;
	//Multiplicacion
	$z = $x * $y;
	echo $z.$salto;
	$x *= $y; //$x ya vale 20
	echo $x.$salto;
	//division
	$z = $x / $y;
	echo $z.$salto;
	$x /= $y; //$x ya vale 5
	echo $x.$salto;

	$uno = "uno";
	$dos = "dos";
	$tres = "tres";
	$cuatro = "cuatro";
	$cad = 0;
	for ($i=0; $i < 5; $i++) { 
		$cad += $x;
	}
	echo $cad.$salto;

	//modulo
	$z = $x % $y;
	echo $z.$salto;
	$x %= $y; //$x ya vale 5
	echo $x.$salto;

	//incremento
	$x++;
	$x++;
	$x++;
	$x++;
	print($x.$salto);
	//decremento
	$x--;
	$x--;
	$x--;
	$x--;
	print($x.$salto);

	//Esructuras de Control
	//Condicional
	echo "<h2>Condicional</h2>";
	if (3 == 3) {
		echo "Si, son iguales".$salto;
	}else{
		echo "No no son iguales".$salto;
	}
	$nombre = "pedro";
	$nombre2 = "juan";

	if ($nombre == $nombre2) {
		echo "El nombre: ".$nombre." con el nombre ".$nombre2." Son iguales";
	}else{

		echo "El nombre: ".$nombre." con el nombre ".$nombre2." Son diferentes";
	}

	$valor = ($nombre == $nombre2) ? true : false;
	echo $valor;
	$verdad = true;
	echo $verdad;

	$falso = false;
	echo $falso;
	if ($valor) {
		echo "verdad";
	}else{
		echo "falso";
	}

	switch ($x) {
		case '1':
			echo "Uno";
			break;
		case '2':
			echo "Dos";
			break;
		case '3':
			echo "Tres";
			break;
		case '4':
			echo "Cuatro";
			break;
		
		default:
			echo "No es un numero";
			break;
	}
	//Bucles
	echo "<h2>Bucle (For)</h2>";
	/*
	for (Valor inicial; Condición ; Incremento) { 
		Proceso
	}


	*/
	for ($i=10; $i <= 15 ; $i++) { 
		echo "<p>Este es un parrafo nro:". $i ."<p>";
	}
	

 ?>
	
</body>
</html>
<?php 

 ?>