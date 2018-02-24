<?php 
	session_start();
	session_destroy();
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
	<h1>Aplicacion Web - curso PHP</h1>
	<hr>
	<form action="rutas/autenticar.php" method="post">
		<p>
			Email: <input type="email" name="email" required>
		</p>
		<p>
			Password: <input type="password" name="clave" required>
		</p>
		
		<hr>
		<input type="submit" value="Log In">

	</form>


</body>
</html>