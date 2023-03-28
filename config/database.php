<?php
	
	class Conectar {

		public static function conexion(){
			require_once "config/config.php";
			$conexion = new mysqli(HOST,USER,PASSWORD,DATABASE);
			return $conexion;
			
		}
	}
?>