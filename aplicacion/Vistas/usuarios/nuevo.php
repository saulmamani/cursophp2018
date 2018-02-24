<?php 
	include("../rutas/web.php");
	//cargar datos de la interfaz
	$reg = new Usuario();
	$obj = new UsuarioController();

	$reg->email = $_POST['email'];
	$reg->clave = $_POST['clave'];
	$reg->nombre = $_POST['nombre'];
	$reg->celular = $_POST['celular'];
	$reg->rol = 'Lector';

	if($obj->insertar($reg))
	{
		echo "<script> alert('registro insertado') </script>";

		echo "<script> window.location.href = './' </script>";
	}
	else
	{
		echo "Error!! revise los datos";
		echo "<a href='javascript:history.go(-1)'  >Volver..</a>";
	}

?>