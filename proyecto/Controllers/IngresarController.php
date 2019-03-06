<?php 
require_once('./../models/Usuario.php');
require_once('./../config/Sesiones.php');
		
		if ($_POST) {
			$u = $_POST['usuario'];
			$p = $_POST['pass'];

			$usuario = new Usuario();
			$usuario->set('usuario', $u);
			$usuario->set('contrasena', $p);

			if ($usuario->ingresar()) {
				$sesion = new Sessiones();
				$sesion->setAuth("si");
				$sesion->setUsuario($u);
				$sesion->crear_sesion();
				header("Location: ./../views/admin/index.php");
			}else{
				header("Location: ./../views/registro/ingresar.php");
			}
			
		}else if ($_GET) {
			switch ($_GET['msg']) {
				case 'r':
					echo "Usuario registrado correctamente";
					break;
				case 'e':
					echo "Usuario Incorrecto";
					break;				
				default:
					echo "";
					break;
			}
		}
