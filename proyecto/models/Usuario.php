<?php 
require 'Conexion.php';
/**
* Usuario.php
*/
class Usuario
{
	private $usuario;
	private $contrasena;
	private $correo;
	private $nombres;
	private $apellidos;
	private $fecha;

	private $con;
	
	function __construct()
	{
		$this->con = new Conexion();
	}

	public function set($atributo, $contenido)
	{
		$this->$atributo = $contenido;
	}

	public function get($atributo)
	{
		return $this->$atributo;
	}

	public function Ingresar()
	{

		if ($this->verificar($this->usuario, $this->contrasena)) {
			//echo "Existe el usuario";
			return True;
		}else{
			//echo "No existe el usuario";
			return False;
		}
	}

	public function verificar($u, $p)
	{
		$sql = "SELECT * FROM usuario where usuario = '$u' and contrasena = '$p'";
		//echo $sql;
		 $datos =  $this->con->consultaRetorno($sql);
		 //echo $datos->num_rows;

		 if ($datos->num_rows > 0){
		 	//echo "Bienvenido: ". $u;
		 	return True;
		 }
		return False;		 
		 //print_r($datos);
	}

}





 ?>