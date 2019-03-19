<?php 
require 'Conexion.php';
/**
* Categoria.php
*/
class Categoria
{
	private $nombre;
	private $descripcion;

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

	public function lista_categorias()
	{
		$sql = "select * from categoria";
		$categorias =  $this->con->consultaRetorno($sql);
		return $categorias;
	}

	public function eliminar_categoria($id)
	{
		$sql = "Delete from categoria where id = $id";
		$this->con->consultaSimple($sql);
	}

	public function modificar_categoria()
	{
		$sql = "update categoria set nombre = '$this->nombre', descripcion = '$this->descripcion' where id = $this->id";

		$this->con->consultaSimple($sql);
		//header("Location: ./../admin/index.php");
	}

	public function obtener_categoria()
	{
		$sql = "select * from usuario where id = ".$this->id;
		return $this->con->consultaRetorno($sql);
	}

}



?>