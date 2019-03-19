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
		$c = md5($p); //Encriptando la contraseña

		$sql = "SELECT * FROM usuario where usuario = '$u' and contrasena = '$c'";
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

	public function Registrarse()
	{
		$c = md5($this->contrasena); // Encriptando la contraseña
		$sql = "INSERT INTO usuario(id, usuario, contrasena, correo, nombres, apellidos, fecha) VALUES (null,'$this->usuario','$c','$this->correo','$this->nombres','$this->apellidos',now())";
	//echo $sql;
		$this->con->consultaSimple($sql);
		return true;	
	}

	public function getUsuarios()
	{
		$sql = "select * from usuario";
		$usuarios =  $this->con->consultaRetorno($sql);
		return $usuarios;
	}

	public function eliminar_usuario($id)
	{
		$sql = "Delete from usuario where id = $id";
		$this->con->consultaSimple($sql);
	}

	public function modificar()
	{
		$c = md5($this->contrasena);
		$sql = "update usuario set usuario = '$this->usuario', contrasena = '$c', correo = '$this->correo', nombres = '$this->nombres', apellidos = '$this->apellidos', fecha = now() where id = $this->id";

		$this->con->consultaSimple($sql);
		return true;
	}

	public function getUser()
	{
		$sql = "select * from usuario where id = ".$this->id;
		return $this->con->consultaRetorno($sql);
	}

}



?>