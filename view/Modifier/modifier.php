<?php

$this->title = "Enregistrement";
$this->style = "public/css/index.css";
$this->script = "public/js/home.js";
?>


<h1>Enregistrement fini.</h1>

<p>
    Vous avez correctement modifié votre mot de passe.
</p>

<img id="LogoPNG" src="public/images/logo.png" alt="Logo du site">
<a href="Login">Retour à la   page de connexion</a>
<a onload="adminAccess()" href="Adminhome" id="adminAccess" style="display: none">Accès BackOffice</a>