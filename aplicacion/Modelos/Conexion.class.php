<?php
error_reporting(E_ALL ^E_NOTICE);

	class Conexion
	{
		public static function conectar()
		{
			$server = "localhost";
			$database = "cursophp";
			$user = "root";
			$password = "root";

			$cadcon = new mysqli($server, $user, $password);
			$cadcon->select_db($database);
			return $cadcon;
		}

	public static function desconectar($cadcon)
		{
			mysqli_close($cadcon);
		}
	}
?>



