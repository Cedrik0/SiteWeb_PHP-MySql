<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Ma page web</title>

</head>

<body>

<h1>Ma page web</h1>

<p>
    Veuillez taper votre prénom :
</p>

<form action="cible.php" method="post">
    <p>
        <input type="text" name="prenom" />
        <input type="submit" value="Valider" />
    </p>
    <textarea name="message" rows="8" cols="45">Votre message ici.</textarea>
    <br />
    <select name="choix">
        <option value="Japon" selected="selected">Japon</option>
        <option value="France">France</option>
        <option value="Espagne">Espagne</option>
        <option value="Italie">Italie</option>
        <option value="Canada">Canada</option>
        <option value="Egypte">Egypte</option>
    </select>

    <input type="checkbox" name="case" id="case" /> <label for="case">Ma case à cocher</label>
    <br />
    Aimez-vous les frites?
    <input type="radio" name="frites" value="oui" id="oui" /> <label
    for="oui">Oui</label>
    <input type="radio" name="frites" value="non" id="non" /> <label for="non">Non</label>

    <input type="hidden" name="pseudo" value="Mateo21">


</form>
<form action="cible_envoi.php" method="post" enctype="multipart/form-data">

    <p>
        Formulaire d'envoi de fichier :<br />
        <input type="file" name="monfichier" /><br />
        <input type="submit" value="Envoyer le fichier" />

    </p>

</form>


<p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>

</body>

</html>