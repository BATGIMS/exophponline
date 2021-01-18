<?php
if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND
!empty($_POST['adresse']) AND !empty($_POST['ville']) AND
!empty($_POST['code']))
{
	echo "<table border=\"1\" >";
	echo "<caption><b>Confirmation de vos coordonnées2</b></caption>";
	foreach($_POST as $cle=>$val)
	{
		echo "<tr> <td> $cle : &nbsp;</td> <td>".stripslashes($val)."</td></tr>";
		}
		echo "</table>";
		}
		else
		{
			echo "<script type=\"text/javascript\">alert('Le formulaire estincomplet');document.location='ch6exo2.htm' </script>";
			}
?>