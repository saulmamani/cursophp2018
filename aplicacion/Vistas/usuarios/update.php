<?php 
	//recoger parametro de la url
	$email = $_GET['email'];

	include ("../rutas/web.php");
	$obj = new UsuarioController();
	$usuarios = $obj->buscarpor($email);

	//recogiendo la primera fila
	$f = $usuarios->fetch_object();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Aplicacion web</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h2>Modificar usuario</h2>
	<hr>
	<form action="modificar.php" method="post">
		<p>
			Email: <input type="email" name="email" required value="<?php echo $f->email ?>" readonly>	
		</p>
		<p>
			Nombre: <input type="text" name="nombre" required value="<?php echo $f->nombre ?>" >	
		</p>
		<p>
			Celular: <input type="tel" name="celular" value="<?php echo $f->celular ?>">	
		</p>

		<hr>
		<input type="submit" value="Aceptar"> || 
		<a href="./">Cancelar...</a>		
	</form>
</body>
</html>