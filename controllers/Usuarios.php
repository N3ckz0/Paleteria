<?php

	class UsuariosController {

		public function __construct(){
			require_once "models/UsuariosModel.php";
		}

		public function verifLogin(){
			session_start();
			$user = new Usuarios_model();

			$usuario = $_POST['bb-user'];
			$contrasena = $_POST['bb-password'];

			if($user->login($usuario,$contrasena)){
				$datos["usuario"] = $user->login($usuario,$contrasena);
				$_SESSION['token'] = bin2hex(random_bytes(16));
				$_SESSION['Usuario'] = $datos["usuario"];
				$rol = $datos["usuario"]["rol"];
			}elseif($user->login_mail($usuario,$contrasena)){
				$datos["usuario"] = $user->login_mail($usuario,$contrasena);
				$_SESSION['token'] = bin2hex(random_bytes(16));
				$_SESSION['Usuario'] = $datos["usuario"];
				$rol = $datos["usuario"]["rol"];
			}else{
				$datos["usuario"] = null;
			}

			if($datos['usuario'] == null || $datos['usuario'] = ''){
				//Si el usuario no existe muestra vista de error
				require_once "views/errores/usuario_inexistente.php";
			}else{
				if($rol == "admin"){
					$_SESSION['admin'] = 'Administrador';
					require_once "views/admin/home.php";
				}elseif($rol == "user"){
					require_once "views/user/home.php";
				}else{
					require_once"index.php?c=WebPage&a=index";
				}
			}
		}

		/*Registro*/
		public function registro(){
			$usuarios = new Usuarios_model();

			$nombre = $_POST['bb-name'];
			$apellidos = $_POST['bb-lastname'];
			$telefono = $_POST['bb-phone'];
			$fecha_nac = $_POST['bb-date'];
			$usuario = $_POST['bb-user'];
			$correo = $_POST['bb-correo'];
			$contrasena = $_POST['bb-password'];
			$verifica_c = $_POST['bb-vpassword'];
			$newtel =str_replace('-','',$telefono);

			if($contrasena == $verifica_c){
				$usuarios->insert($nombre,$apellidos,$newtel,$fecha_nac,$usuario,$correo,$contrasena,'user');
				require_once "views/pagina/index.php";
			}else{
				require_once "views/errores/contrasena_diferente.php";
			}

		}

		public function session_user(){
			require_once "views/user/home.php";
		}




	}
?>
