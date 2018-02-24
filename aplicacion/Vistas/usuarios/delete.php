<?php 
	//recoger parametro de la url
	$email = $_GET['email'];

	include ("../rutas/web.php");
	$obj = new UsuarioController();

	//eliminando registro
	$obj->eliminar($email);
	echo "<script> window.location.href = './' </script>";
?>