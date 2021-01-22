<?php

$this->title = "Enregistrement | Cubetech";
$this->style = "public/css/index.css";
$this->style = "public/css/modifier.css";
$this->script = "public/js/home.js";
?>


<h1><span id="succes" ><?php echo $result ?></h1></span>

<div id="correct">
    <?php echo $succesMessage ?>
</div>

<a id="retour" href="Login">Retour à la page de connexion</a>
<a onload="adminAccess()" href="Home/disconnect" id="adminAccess" style="display: none">Accès BackOffice</a>
