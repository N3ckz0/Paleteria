<?php

	/**
	 *
	 */
	class WebPageController
	{

		public function index(){
			require_once "views/pagina/index.php";
		}

		public function registro(){
			require_once "views/pagina/registro.php";
		}

		/*VISTAS DEL ADMINISTRADOR*/
		public function perfil(){
			require_once "views/admin/perfil.php";
		}

		public function home(){
			require_once "views/admin/home.php";
		}

		public function products(){
			require_once "views/admin/productos.php";
		}

		public function newProduct(){
			require_once "views/admin/nuevo_producto.php";
		}

		public function modificaPerfil(){
			require_once "views/admin/modificar_perfil.php";
		}

		public function recuperaContra(){
			require_once "views/pagina/recuperacion_contrasena.php";
		}

		/*VISTAS DEL USUARIO*/
		public function perfilUser(){
			require_once "views/user/perfil.php";
		}

		public function homeUser(){
			require_once "views/user/home.php";
		}

		public function productsUser(){
			require_once "views/user/productos.php";
		}

		public function modificaPerfilUsuario(){
			require_once "views/user/modificar_perfil.php";
		}

	}

?>