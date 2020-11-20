<?php

$this->title = "Acceuil";
$this->style = "public/css/index.css";
$this->script = "public/js/home.js";
?>
    <?php include_once "view/header.html"; ?>

    <a onload="adminAccess()" href="Admin" id="adminAccess" style="display: none">Accès BackOffice</a>

    <?php echo "<h1>Bienvenue ".$pseudo." sur le site CubeTech</h1>" ?>

    <img onload="adminAccess()" id="LogoPNG" src="public/images/logo.png" alt="Logo du site">

    <a href="Home/disconnect">Disconnect</a>

    <?php include_once "view/footer.html"; ?>

