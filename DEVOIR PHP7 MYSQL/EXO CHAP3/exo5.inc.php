<?php

// compte tenu des risques sur le serveur, le test des valeurs sera compris entre 100 et 120
$initx=80;//lettre P
$inity=72;//lettre H
$initz=80;//lettre P
//Boucles imbriquées
for($x=$initx;$x<=90;$x++)
{
	for($y=$inity;$y<=90;$y++)
	{
		for($z=$initz;$z<=90;$z++)
	{
		for($num=100;$num<1000;$num+=100)
		{
			$tab[]="$num".chr($x).chr($y).chr($z)." 75";
			}$initz=65;//on repart à la lettre A pour le troisièmecaractère
			}$inity=65;//on repart à la lettre A pour le deuxième caractère
			}
			}
			print_r($tab);
?>