<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8" />

    <title>Mon super site</title>

</head>



<body>



<!-- Insère le contenu de la page header.php -->



<?php include("header.php"); ?>



<!-- Insère le contenu de la page menu.php -->



<?php include("menus.php"); ?>



<!-- Le corps -->



<div id="corps">

    <h1>Mon super site</h1>

    <a href="bonjour.php?nom=Dupont&amp;prenom=Jean&amp;repeter=8">Dis-moi bonjour !</a>

    <p>

        Bienvenue sur mon super site !<br />

        Vous allez adorer ici, c'est un site génial qui va parler de... euh... Je cherche encore un peu le thème de mon site. :-D

    </p>

</div>



<!-- Insère le contenu de la page footer.php -->



<?php include("footer.php")?>



</body>

</html>