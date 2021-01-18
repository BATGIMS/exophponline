<?php
echo "Version de PHP : ",PHP_VERSION, "
";
echo "Système d'exploitation du serveur : ",PHP_OS, "
";
echo "Langue du navigateur client :
",$_SERVER["HTTP_ACCEPT_LANGUAGE"], "
"; // J’obtiens le résultat suivant (sur mon poste) :
 // Version de PHP : 5.6.31
 // Système d'exploitation du serveur : WINNT
 // Langue du navigateur client : fr,fr-FR;q=0.8,en-US;q=0.5,en;q=0.3
?>