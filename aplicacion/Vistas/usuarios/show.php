<?php 
	//recoger parametro de la url
	$email = $_GET['email'];

	include ("../rutas/web.php");
	$obj = new UsuarioController();
	$usuarios = $obj->buscarpor($email);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Aplicacion Web</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h2>Perfil de Usuario</h2>
	<hr>

<?php while($f = $usuarios->fetch_object()): ?>

	Nombre: <?php echo $f->nombre ?> <br>
	Celular: <?php echo $f->celular ?> <br>
	email:	<?php echo $f->email ?>

<?php endwhile; ?>

<hr>
<a href="./">Volver..</a>

</body>
</html>