<?php 
	include("web.php");

	$obj = new UsuarioController();

	$lista = $obj->listar();

	//print_r($lista->fetch_object());
	echo $obj->autenticar('admin@admin.com','12345689');
?>