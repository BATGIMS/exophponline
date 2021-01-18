<?php
$ch="PHP  \n est meilleur \n que ASP \n et JSP \n réunis";
echo ereg_replace("\n","<br />",$ch); // En utilisant une expression régulière et la fonctionereg_replace()
?>