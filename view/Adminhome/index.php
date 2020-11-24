<?php

$this->title = "Acceuil Adminhome";
$this->style = "public/css/index.css";

?>

<?php include_once "view/header.html"; ?>

<?php echo "<h1>Bienvenue ".$pseudo." sur le backoffice de  CubeTech</h1>" ?>

<img id="LogoPNG" src="public/images/logo.png" alt="Logo du site">

<a href="Adminhome/register">Enregistrer un nouvel utilisateur</a>

<a href="Adminhome/disconnect">Disconnect</a>

<?php include_once "view/footer.html"; ?>