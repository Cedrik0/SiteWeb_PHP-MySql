<?php
//si le mot de passe est bon, on affiche les codes
if(isset($_POST['password']) AND $_POST['password'] == 'kangourou' ){

    echo "Bonjour " . $_POST['pseudo'] . ", vous avez accès aux codes d'accès du serveur central de la nasale!";

}else{ //sinon on affiche le message d'erreur
    echo "Mauvais mot de passe, vous n'êtes pas autorisé à accéder à ces infos";
}
?>