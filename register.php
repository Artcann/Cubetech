<?php
$title = "Inscription";
$style = "static/index.css";

ob_start();
?>

<h1>Inscription</h1>

<h3>Veuillez remplir le formulaire</h3>

<form action="register_post.php" method="post">
    <div>
        <label for="pseudo">Pseudo : </label><input type="text" name="pseudo" id="pseudo" required>
    </div>
    <div>
    <label for="password">Mot de passe : </label><input type="password" name="password" id="password" required>
    </div>
    <div>
    <label for="password">Comfirmer mot de passe : </label><input type="password" name="password2" id="password" required>
    </div>
    <div>
        <label for="submit">Envoyer</label><input type="submit">
    </div>
</form>

<?php $content = ob_get_clean();
require("header.php");
?>