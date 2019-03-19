<?php 
require 'Conexion.php';
/**
* Producto.php
*/
class Producto
{
	private $nombre;
	private $descripcion;
	private $imagen;
	private $precio_compra;
	private $precio_venta;
	private $cantidad_stock;
	private $categoria_id;
	private $activo;
	private $fecha_vencimiento;

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

	public function lista_productos()
	{
		$sql = "select * from producto";
		$productos =  $this->con->consultaRetorno($sql);
		return $productos;
	}

	public function eliminar_producto($id)
	{
		$sql = "Delete from producto where id = $id";
		$this->con->consultaSimple($sql);
	}

	public function modificar_producto()
	{
		$sql = "update producto set nombre = '$this->nombre', descripcion = '$this->descripcion', imagen = '$this->imagen', precio_compra = '$this->precio_compra', precio_venta = '$this->precio_venta', cantidad_stock = '$this->cantidad_stock', categoria_id = '$this->categoria_id', activo = '$this->activo', fecha_vencimiento = '$this->fecha_vencimiento' where id = $this->id";

		$this->con->consultaSimple($sql);
		//header("Location: ./../admin/index.php");
	}

	public function obtener_producto()
	{
		$sql = "select * from producto where id = ".$this->id;
		return $this->con->consultaRetorno($sql);
	}

}



?>