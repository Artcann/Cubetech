<?php


if(!empty($_SESSION["isLogged"])) {
    echo ("You're connected");
}

$title = "Connection";
$style = "public/css/index.css";
?>
    <tr>
        <td><img src="public/images/logo.png" alt="Logo CubeTech" id="LogoPNG"></td>
        <td><h1>Connexion</h1></td>
    </tr>

    <h3>Veuillez remplir le formulaire</h3>

    <form class="login" action="testRouteur.php?action=login-verification" method="post">
        <div>
            <label for="pseudo">Identifiant : </label><input type="text" name="pseudo" id="pseudo" required>
        </div>
        <div>
            <label for="password">Mot de passe : </label><input type="password" name="password" id="password" required>
        </div>
        <div>
            <label for="submit">Envoyer</label><input type="submit">
        </div>
    </form>

    <!--- <a href="index.php?action=register">Créer un compte.</a> -->
