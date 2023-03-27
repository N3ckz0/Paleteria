<?php

	class Usuarios_model {

		private $db;
		private $usuarios;

		public function __construct(){
			$this->db = Conectar::conexion();
			$this->usuarios = array();
		}

		public function login($user,$password){
			$sql = "SELECT * FROM usuarios WHERE usuario = '$user' AND contrasena = '$password'";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();
			return $row;
		}

		public function login_mail($mail,$password){
			$sql = "SELECT * FROM usuarios WHERE correo = '$mail' AND contrasena = '$password'";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();
			return $row;
		}

		public function get_users($rol){
			$sql = "SELECT * FROM personas WHERE rol = '$rol'";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->usuarios[] = $row;
			}
			return $this->usuarios;
		}

		public function insert($nombre, $apellidos, $telefono, $fecha_nac, $usuario,$correo,$contrasena,$rol){

			$resultado = $this->db->query("INSERT INTO usuarios (nombre, apellidos, telefono, fecha_nac, usuario,correo,contrasena,rol) VALUES ('$nombre', '$apellidos', '$telefono', '$fecha_nac', '$usuario', '$$correo', '$contrasena', '$rol')");

		}

		public function modify($id, $nombre, $apellidos, $telefono, $fecha_nac, $usuario,$correo,$contrasena,$rol){

			$resultado = $this->db->query("UPDATE usuarios SET nombre='$nombre', apellidos='$apellidos', telefono='$telefono', fecha_nac='$fecha_nac', usuario='$usuario', correo='$correo', contrasena='$contrasena', rol='$rol' WHERE id = '$id'");
		}

		public function delete($id){

			$resultado = $this->db->query("DELETE FROM usuarios WHERE id = '$id'");

		}

		public function get_user($id)
		{
			$sql = "SELECT * FROM usuarios WHERE id='$id' LIMIT 1";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}
	}
?>
