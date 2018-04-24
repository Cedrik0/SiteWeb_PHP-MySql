<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Ma page web</title>

</head>

<body>

<h1>Ma page web</h1>

<p>
    Cette page ne contient que du HTML.<br />
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
</form>



<p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>

</body>

</html>