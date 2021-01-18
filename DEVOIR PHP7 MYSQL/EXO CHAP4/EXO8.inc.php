<?php
$modele="^[0-9]?([0-9]?)$";
$age="84";
if (ereg($modele, $age))
{
	echo "$age est un age valide <br />";
	
	return TRUE;
	}
	else
	{
		echo "$age est un age invalide <br />";
		return FALSE;
		}
?>