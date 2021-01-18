<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Exercice chapitre 6 n° 5</title>
</head>
<body>
<form action="ch6exo5.php" method="post">
<fieldset>
<legend><b>Saisissez votre e-mail </b></legend>
<table border="0" >
<tr>
<td>mail : </td>
<td>
<input type="text" name="mail" />
<input type="hidden"name="navigateur" value="<?= $_SERVER['HTTP_USER_AGENT'] ?>"/>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>
<input type="submit" value="ENVOI" />
</td>
</tr>
</table>
</fieldset>
</form>
<?php
if(!empty($_POST['mail']) AND !empty($_POST['navigateur']) )
{
	echo "<table border=\"1\" >";
	echo "<caption><b>Votre mail et votre navigateur</b></caption>";
	foreach($_POST as $cle=>$val)
	{
		echo "<tr> <td> $cle : &nbsp;</td> <td>".stripslashes($val)."</td></tr>";
		}
		echo "</table>";
		}
		else
		{
			echo "<script type=\"text/javascript\">alert('Le formulaire estincomplet');document.location='ch6exo5.php' </script>";
			}
?>
</body>
</html>