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
                     <img id="profil" src="public/avatars/<?php echo $data["login"];?>.jpg">
                </div>
                <div class="row2-col1">
                    <p id="info">
                        Numéro de matricule : <span> <?php echo $data["matricule"];?></span> <br/>
                        Grade : <span><?php echo $data["grade"];?></span> <br/>
                        Nom : <span><?php echo $data["nom"];?></span> <br/>
                        Prénom : <span><?php echo $data["prenom"];?></span> <br/>
                        Date de naissance : <span><?php echo $data["naissance"];?></span> <br/>
                        Nationalité : <span><?php echo $data["nationalite"];?></span> <br/>
                        Caserne de rattachement : <span><?php echo $data["caserne"];?></span> <br/>
                        Corps d'armée : <span><?php echo $data["corps"];?></span> <br/>
                        Adresse email : <span><?php echo $data["mail"];?></span>
                    </p>
                </div>
            </div>

            <div class="col2">
                <div class="row1-col2">
                    <center><p><img src="public/images/logo.png"></p></center>
                </div>
                <div class="row2-col2">
                    <h1>

                       Bienvenue <span><?php echo $data["login"];?></span> sur le site CubeTech 
                       
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
                     <center><li id="bt1"><a id="button" href="home/disconnect">Déconnexion</a></li></center>
                </div>     
            </div> 
         </div>
</body>
</html>
