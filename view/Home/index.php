<?php

$this->title = "Acceuil";
$this->style = "public/css/index.css";
$this->script = "public/js/home.js";
?>
    <?php include_once "view/header.html"; ?>

    <a onload="adminAccess()" href="Admin" id="adminAccess" style="display: none">Accès BackOffice</a>

    <?php echo "<h1>Bienvenue ". $prenom . " sur le site CubeTech</h1>" ?>

    <img onload="adminAccess()" id="LogoPNG" src="public/images/logo.png" alt="Logo du site">

    <a href="Home/disconnect">Disconnect</a>
    
    <div>
        <h2>
            <?php echo  
            "Numéro de matricule: " . $matricule . "<br/>" .
            "Grade : " . $grade . "<br/>" .
            "Nom : " . $nom . "<br/>" .
            "Prénom : " . $prenom . "<br/>" .
            "Date de naissance : " . $naissance . "<br/>" .
            "Nationalité : " . $nationalite . "<br/>" .
            "Caserne de rattachement : " . $caserne . "<br/>" .
            "Corps d'armée : " . $corps . "<br/>" . $mail ?>
        </h2>
    </div>

    <a href="#"> Accèder à mes résultats </a>

    

    <?php include_once "view/footer.html"; ?>

