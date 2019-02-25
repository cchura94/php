<?php 
/**
* Conexion.php 
*/
class Conexion
{	
	private $host = 'localhost';
	private $user = 'root';
	private $pass = '';
	private $bd = 'proyecto';
	private $con;

	//private $array = array('host'=>'localhost', 'user'=>'root')
	//$this->array['host']

	function __construct()
	{
		$this->con = new mysqli($this->host, $this->user, $this->pass, $this->bd);
	}

	public function consultaSimple($sql)
	{
		$this->con->query($sql);
	}

	public function consultaRetorno($sql)
	{
		$datos = $this->con->query($sql);
		return $datos;
	}
}


//$c = new Conexion();
//$c->consultaRetorno("SELECT * from usuario");


 ?>