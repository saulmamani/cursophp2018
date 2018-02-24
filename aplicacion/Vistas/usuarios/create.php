<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Aplicacion web</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h2>Nuevo usuario</h2>
	<hr>
	<form action="nuevo.php" method="post">
		<p>
			Email: <input type="email" name="email" required>	
		</p>
		<p>
			Clave: <input type="password" name="clave" required>
		</p>
		<p>
			Nombre: <input type="text" name="nombre" required>	
		</p>
		<p>
			Celular: <input type="tel" name="celular">	
		</p>

		<hr>
		<input type="submit" value="Aceptar"> || 
		<a href="./">Cancelar...</a>		
	</form>
</body>
</html>