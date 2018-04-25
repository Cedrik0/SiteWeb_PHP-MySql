<?php
// on teste si le fichier a bien été envoyé et si il n'y a pas d'erreur
if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0){

    //on test si le fichier n'est pas trop gros
    if($_FILES['monfichier']['size'] <= 1000000){

        // on test si il est autorisée
        $infosfichier = pathinfo($_FILES['monfichier']['name']);
        $extension_upload = $infosfichier['extension'];
        $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');

        if (in_array($extension_upload, $extensions_autorisees)){


            move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' .
            basename($_FILES['monfichier']['name']));
            echo "L'envoi a bien été effectué !";
        }
    }
}
?>