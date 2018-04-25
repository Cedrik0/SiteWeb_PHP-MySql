<form action="formulaireTp.php" method="post">

    <input type="text" name="pseudo" value="pseudo"/><br />
    <input type="password" name="password" value="password"><br />
    <input type="submit" value="Valider">

</form>

<?php
//pas de mot de passe envoyé ou il n'est pas bon
if(!isset($_POST['password']) OR $_POST['password'] != 'kangourou' ){

    echo 'Mauvais mot de passe, vous n\'avez pas accès à ces infos.' ;
    //mot de passe envoyé et bon
}else{
    //affiche les codes
    echo "Bonjour " . $_POST['pseudo'] . ", vous avez accès aux codes d'accès du serveur central de la nasale!";
}
?>