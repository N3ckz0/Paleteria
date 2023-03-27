<?php
	
	class Conectar {

		public static function conexion(){
			require_once "config/config.php";
			/*$conexion = new mysqli("162.241.61.70", "cleiindu_educorhoy", "Quetuquere1!", "cleiindu_dbpaleteria");*/
			$conexion = new mysqli(HOST,USER,PASSWORD,DATABASE);
			return $conexion;
			
		}
	}
?>