<?php 
	//recoger datos, esto despues va hacer con la interfaz
	
	$n1 = $_POST['n1'];
	$n2 = $_POST['n2'];
	$opcion = $_POST['boton'];


	//utizando la clase y creando un objeto
	include('Operacion.class.php');
	$obj = new Operacion();

	$obj->a = $n1;
	$obj->b = $n2;

	if($opcion == "Sumar")
		echo "<br/> La suma es: " . $obj->sumar();
	else if($opcion == "Restar")
		echo "<br/> La resta es: " . $obj->restar();
	else if($opcion == "Multiplicar")  
		echo "<br/> La multiplicacion es: " . $obj->multiplicar();
	else if($opcion == "Dividir")  
		echo "<br/> La divicion es: " . $obj->dividir();  
	else
		echo "<br/> La suma del rango es: " . $obj->sumarRango();  
?>

<br>
<a href="calculadora.html"> volver... </a>