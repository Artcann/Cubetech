<?php

$this->title = "Enregistrement";
$this->style = "public/css/index.css";
$this->script = "public/js/home.js";
?>

<h1>Enregistrement fini.</h1>

<p>
    Vous vous êtes correctement enregistré sur la plateforme.<br>
    Vous trouverez ci-dessous votre login, il vous servira à vous connecter à la plateforme par la suite, retenez le bien.
</p>

<?php /** @noinspection PhpUndefinedVariableInspection */
echo "<h3>".$login."</h3>";
echo "<h3>".$test."</h3>"; ?>

<img id="LogoPNG" src="public/images/logo.png" alt="Logo du site">

<a href="Login">Retour à la page de connexion</a>

<a onload="adminAccess()" href="Adminhome" id="adminAccess" style="display: none">Accès BackOffice</a>


<?php include_once "view/footer.html"; ?>

