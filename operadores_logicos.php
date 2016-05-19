<?php 
/*
$a and $b	And (y)	            TRUE si tanto $a como $b son TRUE.
$a && $b	And (y)				TRUE si tanto $a como $b son TRUE.

$a or $b	Or (o inclusivo)	TRUE si cualquiera de $a o $b es TRUE.
$a || $b	Or (o inclusivo)	TRUE si cualquiera de $a o $b es TRUE.

! $a	    Not (no)			TRUE si $a no es TRUE.

*/

$a = 5;
$b = 8;

echo var_dump(($a <= $b) && ($b >= $a));
echo "<br>";
echo var_dump(($a == $b) || ($b >= $a));
echo "<br>";
echo var_dump( ! ($a > $b) );



 ?>