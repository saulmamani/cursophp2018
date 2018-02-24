<?php 
	include("../rutas/web.php");
	$reg = new Usuario();
	$obj = new UsuarioController();

	//recogiendo el email para modificar
	$email = $_POST['email'];


	//cargar datos de la interfaz
	$reg->nombre = $_POST['nombre'];
	$reg->celular = $_POST['celular'];

	if($obj->modificar($reg, $email))
	{
		echo "<script> alert('registro modificado') </script>";

		echo "<script> window.location.href = './' </script>";
	}
	else
	{
		echo "Error!! revise los datos";
		echo "<a href='javascript:history.go(-1)'  >Volver..</a>";
	}

?>