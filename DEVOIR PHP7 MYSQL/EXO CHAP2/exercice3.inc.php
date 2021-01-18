<?php
$x="PostgreSQL";
$y="MySQL";
$z=&$x;
$x="PHP 5";
$y=&$x;
echo $GLOBALS['x'], "
";
echo $GLOBALS['y'], "
";
echo $GLOBALS['z'], " 
"; // toutes les valeurs valents PHP 5
?>


