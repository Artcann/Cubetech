<?php

$title = "Index";
$style = "public/css/index.css";

if(empty($_SESSION["isLogged"])) {
    header('Location: index.php');
}

ob_start();
?>

    <h1>Bienvenue sur le site CubeTech</h1>

    <img id="LogoPNG" src="public/images/logo.png" alt="Logo du site">

    <a href="index?action=disconnect">Disconnect</a>

<?php $content = ob_get_clean();
$header = "";
require("view/frontoffice/header.php");
