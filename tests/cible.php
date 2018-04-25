<p>Bonjour <?php echo strip_tags($_POST['prenom']); ?> !</p>



<p> <?php echo $_POST['message']; ?></p>

<p>Tu es originaire de <?php echo $_POST['choix']; ?></p>

<p> <?php echo isset($_POST['case']); ?></p>

<p> <?php echo $_POST['frites']; ?></p>

<p> <?php echo $_POST['pseudo']; ?></p>

<p>Si tu veux changer de prénom, <a href="formulaire.php">clique ici</a> pour revenir à la page formulaire.php.</p>