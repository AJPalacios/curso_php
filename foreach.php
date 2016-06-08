<?php 

$mi_array = array(
	"nombre" => "Adan",
	"apellido" => "Palacios",
	"direccion" => "calle 1",
	"edad" => 23
	);

foreach ($mi_array as $key => $value) {
	echo $key."<br>";
}




$datos = array(

	array("adan", 23, "mexico"),
	array("diego", 30, "inglaterra"),
	array("ivan", 35, "españa"),
	array("jorge", 25, "canada")

	);

foreach ($datos as $valor1) {
	foreach ($valor1 as $valor2) {
		echo $valor2."<br>";
	}
}

	

 ?>