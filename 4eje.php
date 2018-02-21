<?php 
	//estructuras repetitivas
	$n = 10;
	$i = 1;
	while ($i <= $n) {
		echo "<p> $i </p>";
		$i++;
	}


	//for
	echo "Uso for <br/>";

	for ($i=0; $i < $n; $i++) { 
		echo $i * $i;
		echo "<br/>";
	}
?>

<h3>Uso de foreach y arrays</h3>
<?php 
$vector = array(1, 5, 3, 76, "saul", 3.5);
	foreach ($vector as $i) {
		echo "$i , ";
	}
?>
