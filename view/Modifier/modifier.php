<?php

$this->title = "Enregistrement";
$this->style = "public/css/index.css";
$this->style = "public/css/modifier.css";
$this->script = "public/js/home.js";
?>


<h1>Enregistrement fini.</h1>

<div id="correct">
    Vous avez correctement modifié votre mot de passe.
</div>

<a id="retour" href="Login">Retour à la   page de connexion</a>
<a onload="adminAccess()" href="Adminhome" id="adminAccess" style="display: none">Accès BackOffice</a>
