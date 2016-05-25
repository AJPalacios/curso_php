<?php 
#Un array en PHP es en realidad un mapa ordenado. Un mapa es un tipo de datos que asocia valores con claves. Este tipo se optimiza para varios usos diferentes; se puede emplear como un array, lista (vector), tabla asociativa (tabla hash - una implementación de un mapa), diccionario, colección, pila, cola, y posiblemente más.


//array simple

$array = array("hola", 20, "otra cadena", 10);

echo $array[3];

#var_dump($array);
echo "<br>";

//array asociativo
$mi_array = array(
	"nombre" => "Adan",
	"apellido" => "Palacios",
	"direccion" => "calle 1",
	"edad" => 23
	);

var_dump($mi_array);
echo "<br>";

//sintaxis de array corta con []
$mi_array2 = [
	20 => 50,
	10,
	"clave" => "23"
];

var_dump($mi_array2);


#acceso a los elementos de un array

echo "<br>";



 ?>