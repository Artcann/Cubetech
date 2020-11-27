<?php

$this->title = "Acceuil";
$this->style = "public/css/index.css";
$this->script = "public/js/home.js";
?>
    <?php include_once "view/header.html"; ?>
    <a onload="adminAccess()" href="Adminhome" id="adminAccess" style="display: none">Accès BackOffice</a>
    <?php /** @noinspection PhpUndefinedVariableInspection */
    echo "<h1>Bienvenue ". $data['prenom'] . " sur le site CubeTech</h1>" ?>

    <img onload="adminAccess()" id="LogoPNG" src="public/images/logo.png" alt="Logo du site">

    <a href="Home/disconnect">Disconnect</a>
    
    <div>
        <h2>
            <?php echo
            "Numéro de matricule: " . $data["matricule"] . "<br/>" .
            "Grade : " . $data["grade"] . "<br/>" .
            "Nom : " . $data["nom"] . "<br/>" .
            "Prénom : " . $data['prenom'] . "<br/>" .
            "Date de naissance : " . $data['naissance'] . "<br/>" .
            "Nationalité : " . $data['nationalite'] . "<br/>" .
            "Caserne de rattachement : " . $data['caserne'] . "<br/>" .
            "Corps d'armée : " . $data['corps'] . "<br/>" . $data['mail'] ?>
        </h2>
    </div>

    <a href="#"> Accèder à mes résultats </a>

    

    <?php include_once "view/footer.html"; ?>

