<?php 

/**
 * Sessiones.php
 */

class Sessiones
{
	private $auth;
	private $usuario;
	
	function __construct()
	{
		session_start();
	}

	public function setAuth($au)
	{
		$this->auth = $au;
	}

	public function getAuth()
	{
		return $this->auth;
	}

	public function setUsuario($u)
	{
		$this->usuario = $u;
	}
	
	public function getUsuario()
	{
		return $this->usuario;
	}

	public function crear_sesion()
	{
		$_SESSION['auth'] = $this->auth;
		$_SESSION['usuario'] = $this->usuario;
	}

	public function cerrar_sesion()
	{
		session_destroy();
	}
}


 ?>