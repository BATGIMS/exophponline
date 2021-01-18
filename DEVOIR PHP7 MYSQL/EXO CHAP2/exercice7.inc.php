<?php
function bool($val)
{
if($val) echo "TRUE 
";
else echo "FALSE 
";
}
//********************
$a="0";
echo "\$a vaut : ",bool($a);
$b="TRUE";
echo "\$b vaut : ",bool($b);
$c=FALSE;
echo "\$c vaut : ",bool($c);
$d=($a OR $b);
echo "\$d vaut : ",bool($d);
$e=($a AND $c);
echo "\$e vaut : ",bool($e);
$f=($a XOR $b);
echo "\$f vaut : ",bool($f);
/*Nous obtenons l’affichage ci-dessous :
$a vaut : FALSE
$b vaut : TRUE
$c vaut : FALSE
$d vaut : TRUE
$e vaut : FALSE
$f vaut : TRUE*/
?>