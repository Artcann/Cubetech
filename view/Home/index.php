<?php

$this->title = "Acceuil";
$this->style = "public/css/home.css";
$this->script = "public/js/home.js";
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
         <div id="container">
            <div class="col1">
                <div class="row1-col1">
                     <img id="profil" src="public/images/profil.png">
                </div>
                <div class="row2-col1">
                    <p id="info">
                        <?php echo
                        "<p> Numéro de matricule: " . $data["matricule"] . "<br/>" .
                        "Grade : " . $data["grade"] . "<br/>" .
                        "Nom : " . $data["nom"] . "<br/>" .
                        "Prénom : " . $data['prenom'] . "<br/>" .
                        "Date de naissance : " . $data['naissance'] . "<br/>" .
                        "Nationalité : " . $data['nationalite'] . "<br/>" .
                        "Caserne de rattachement : " . $data['caserne'] . "<br/>" .
                        "Corps d'armée : " . $data['corps'] . "<br/>" .
                        "Adresse email : " . $data['mail'] . "</p>" ?> 
                    </p>
                </div>
            </div>

            <div class="col2">
                <div class="row1-col2">
                    <center><p><img src="public/images/logo.png"></p></center>
                </div>
                <div class="row2-col2">
                    <h1>
                      <?php 
                        echo "<h1> Bienvenue ". $data['prenom'] . " sur le site CubeTech </h1>"?> 
                    </h1>
                </div>
                <div class="row3-col2">
                    <center><li id="bt2"><a href="#" id="button2"> Accèder à mes résultats</a></li></center>
                </div>
            </div>

            <div class="col3">
                <div class="row1-col3">
                    <p> Agenda des rdv - Bientôt disponible </p>
                    <center><img src="public/images/calendar.jpg"></center>
                </div>
                <div class="row2-col3">
                     <center><li id="bt1"><a id="button" href="">Déconnexion</a></li></center>
                </div>     
            </div> 
         </div>
</body>
</html>
