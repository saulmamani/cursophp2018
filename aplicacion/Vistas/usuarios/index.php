<?php 
	session_start();
	if(!isset($_SESSION['user']))
        header('Location:../');

	include ("../rutas/web.php");
	$obj = new UsuarioController();
	$usuarios = $obj->listar();
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
	<h1>Bienvenido a la Aplicacion</h1>
	<hr>

<p>
	Bienvenido: <?php echo $_SESSION['user']->nombre ?>   || rol: <?php echo $_SESSION['user']->rol ?>
</p>
<a href="../">Salir del sistema</a>
	
	<p>
		Buscar: <input type="text">
		<a href="create.php" > + Nuevo Usuario</a>
		<table width="100%" border="1" >
			<tr>
				<th>Email</th>
				<th>Nombre</th>
				<th>Celular</th>
				<th>Rol</th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
			
<?php while($f = $usuarios->fetch_object()): ?>

		<tr>
			<td><?php echo $f->email ?></td>
			<td><?php echo $f->nombre ?></td>
			<td><?php echo $f->celular ?></td>
			<td><?php echo $f->rol ?></td>
			<td>
<a href="show.php?email=<?php echo $f->email ?>">Ver</a>
			</td>
			<td>

<?php if($_SESSION['user']->rol != "Lector"): ?>
<a href="update.php?email=<?php echo $f->email ?>">Editar</a>
<?php endif; ?>

			</td>
			<td>

<?php if($_SESSION['user']->rol != "Lector"): ?>
<a onclick="return confirm('Seguro que quiere eliminar el registro?')"
   href="delete.php?email=<?php echo $f->email ?>">
Eliminar
</a>
<?php endif; ?>
			</td>
		</tr>

<?php endwhile; ?>
		
		</table>
	</p>


</body>
</html>