<?php 
/*
Los operadores de comparacion nos permiten comparar dos valores

== igual 
=== identico
!= diferente
<> diferente
< menor que
> mayor que
<= menor o igual que
>= mayor o igual que
*/

$a = 20;
$b = 10;
$c = "cadena";

echo "<br>".var_dump(($a==$b));
echo "<br>".var_dump(($a===$c));
echo "<br>".var_dump(($a!=$b));
echo "<br>".var_dump(($a<>$b));
echo "<br>".var_dump(($a<$b));
echo "<br>".var_dump(($a>$b));
echo "<br>".var_dump(($a<=$b));
echo "<br>".var_dump(($a>=$b));





 ?>