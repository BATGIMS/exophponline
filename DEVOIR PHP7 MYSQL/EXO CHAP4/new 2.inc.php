<?php
    function generer($longueur)
    {
    $minuscules = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
    $majuscules = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
	$symboles= "!@#$%^&*()-+?";
    $code = ''; //On déclare notre variable
        for ($i = 1; $i <= $longueur; $i++)
        {
        //On génère un type aléatoire
        $type = rand(0,3);
            switch ($type)
            {
                case 0:
                     $caractere = rand(0,9);
                     $code .= $caractere;
                break;
                
                case 1:
                     $nbre_aleatoire = rand(0, 25);
                     $caractere = $majuscules[$nbre_aleatoire];
                     $code .= $caractere;
                break;
                
                case 2:
                     $nbre_aleatoire = rand(0, 25);
                     $caractere = $minuscules[$nbre_aleatoire];
                     $code .= $caractere;
                break;
				
				case 3:
				   $nbre_aleatoire = rand(0, 13);
			        $caractere = $symboles[$nbre_aleatoire];
				    $code .=$caractere;
				   
            }
        }
    return $code; //On retourne le code généré au complet
    }
?>
<?php
    $nbre_chars = 23; //Changez ce nombre, vous verrez ;)
    $code = generer($nbre_chars);
    echo $code; //On affiche le résultat :p
?>