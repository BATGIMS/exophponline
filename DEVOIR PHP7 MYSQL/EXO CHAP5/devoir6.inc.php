<?php
//Tableau ayant pour valeurs les entiers de 0 à 63
$tab=range(0,63);
//Tableau ayant pour valeurs les décimaux de 0 à 6.3
foreach($tab as $ind=>$val)
{
	$tab[$ind]=$tab[$ind]/10;
	}
	//Tableau dont les clés sont X et les valeurs sin(X)
	foreach($tab as $ind=>$val)
	{
		$val= (string) $val;$tabsin[$val]= sin($val);
	}
		//Création du tableau HTML
		echo "<table border=\"1\" width=\"50%\" >";
		echo "<caption><b>Tableau de valeurs de la fonctionsinus</b></caption>";
		echo "<tr> <th> X </th> <th> sin( X )</th> </tr>";
		foreach($tabsin as $cle=>$val)
		{
			echo "<tr><td>$cle</td> <td>$val</td></tr>";
		}
			echo "</table>";
			echo "<hr />";
?>