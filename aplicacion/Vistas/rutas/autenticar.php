<?php 
	include("web.php");

	$email = $_POST['email'];
	$clave = $_POST['clave'];

	$obj = new UsuarioController();

	if($obj->autenticar($email, $clave) === 1)
	{
		echo "<script> window.location.href = '../usuarios/'; </script>";
	}
	else
	{
		echo "<script> alert('Error');  </script>";
		echo "<script> window.location.href = '../'; </script>";
	}

?>