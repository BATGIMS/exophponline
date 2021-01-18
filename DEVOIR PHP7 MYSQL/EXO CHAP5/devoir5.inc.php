<?php
$tab=array("PHP"=>"http://www.php.net","MySQL"=>"http://www.mysql.org","SQLite"=>"http://www.sqlite.org");
$site=array_rand($tab); // La fonction array_rand qui retourne la cle de l'element pris au hazard. Cette cle permet de lire le nom du site et son addresse URL
echo "Site recommandé : <a href=\"$tab[$site]\" > ",$site,"</a>";
?>