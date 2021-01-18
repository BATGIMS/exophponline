<?php
$x="PHP5";
echo "\$x vaut : $x et est de type ", gettype($x),"
";
$a[]=&$x;
echo "\$a[0] vaut : $a[0] et est de type ", gettype($a),"
";
$y=" 5 eme version de PHP";
echo "\$y vaut : $y et est de type ", gettype($y),"
";
$z=$y*10;
echo "\$z vaut : $z et est de type ", gettype($z),"
";
$x.=$y;
echo "\$x vaut : $x et est de type ", gettype($x),"
";
$y*=$z;
echo "\$y vaut : $y et est de type ", gettype($y),"
";
$a[0]="MySQL";
echo "\$a[0] vaut : {$a[0]} et est de type ", gettype($a),"
";
/*Résultat affiché :

$x vaut : PHP5 et est de type string
$a[0] vaut : PHP5 et est de type array
$y vaut : 5 eme version de PHP et est de type string
$z vaut : 50 et est de type integer
$x vaut : PHP5 5 eme version de PHP et est de type string
$y vaut : 250 et est de type integer
$a[0] vaut : MySQL et est de type array
*/
?>
