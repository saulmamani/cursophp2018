<?php 
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
		Buscar: <input type="text">
		<a href="" > + Nuevo Usuario</a>
		<table width="100%" border="1" >
			<tusuariosr>
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
			<td>Editar</td>
			<td>Eliminar</td>
		</tr>

<?php endwhile; ?>
		
		</table>
	</p>


</body>
</html>