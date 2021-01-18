<?php
switch($_POST["choix"])
{
	case "Vendre":
	header("location:pagevente.htm");
	break;
	case "Acheter":
	header("location:pageachat.htm");
	break;
	case "Louer":
	header("location:pagelocation.htm");
	break;
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Exercice chapitre 6 n° 8</title>
</head>
<body>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" >
<fieldset>
<legend><b>Faites votre choix </b></legend>
<table border="0" >
<tr>
<td><input type="submit" name="choix" value="Vendre" /></td>
<td><input type="submit" name="choix" value="Acheter"/></td>
<td><input type="submit" name="choix" value="Louer" /></td>
</tr>
</table>
</fieldset>
</form>
</body>
</html>
