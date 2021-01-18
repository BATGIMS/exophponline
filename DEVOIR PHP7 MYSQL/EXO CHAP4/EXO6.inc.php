<?php
$ch="Zut je me suis trompé";
$modele="zut";
if(eregi($modele,$ch)) echo "Un Mot censuré";
else echo $ch
?>