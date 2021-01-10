<?php
$this->title = "Connexion";
$this->style = "public/css/index.css";
?>
    <tr>
        <td><img src="public/images/logo.png" alt="Logo CubeTech" id="LogoPNG"></td>
        <td><h1>Connexion</h1></td>
    </tr>

    <h3>Veuillez remplir le formulaire</h3>

    <form class="loginForm" action="login/login" method="post">
        <div>
            <label for="login">Identifiant : </label><input type="text" name="login" id="login" required>
        </div>
        <div>
            <label for="password">Mot de passe : </label><input type="password" name="password" id="password" required>
        </div>
        <div>
            <label for="submit">Envoyer</label><input type="submit">
        </div>
    </form>
