<?php
// ouvre le fichier
$monfichier = fopen('compteur.txt','r+');

//lit la 1er ligne du fichier
$page_vues = fgets($monfichier);
//augmente de 1 le nombre de pages vues
$page_vues += 1;
//remet le curseur au début du fichier
fseek($monfichier, 0);
//écrit le nouveau nombre de pages vues
fputs($monfichier,$page_vues);

// ferme le fichier
fclose($monfichier);

echo '<p>Cette page a été vue ' . $page_vues . ' fois !</p>'
?>