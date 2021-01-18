<?php

//Création de la fonction de validation

function validhttp($ch)
{
$modele="^(www)\.([a-z0-9]+)(\.|-)?([a-z0-9]*)\.([a-z]{2,4}$)";

$ch=strtolower($ch);

if (ereg($modele, $ch))
{
	echo "$ch est valide <br />";
	
	return TRUE;
	}
	else
	{
		echo "$ch est invalide <br />";
		
		return FALSE;
		}
		}
		//Utilisation de la fonction de validation
		$url="www.laposte2.info";
		$url2="www.pierre-plus-loin.info";
		$url3="www.engels.funphp.com";
		validhttp($url);
		validhttp($url2);
		validhttp($url3);
?>