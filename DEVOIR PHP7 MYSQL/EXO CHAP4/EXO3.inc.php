<?php
$nom1="Batomen";
$prenom1="junior";
echo sprintf ("<tt>%'_-20s %'_-20s </tt><br />",$nom1,$prenom1);
$nom2="tchatchou";
$prenom2="hermann";
echo sprintf ("<tt>%'_-20s %'_-20s </tt><br />",$nom2,$prenom2); // Pour obtenir de bons résultats il est préférable d’utiliser une policeà espacement fixe en incluant le texte de chaque ligne dans unélément HTML <tt>
?>