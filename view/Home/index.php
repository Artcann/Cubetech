<?php

$this->title = "Accueil";
$this->script = "public/js/home.js";
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="public/css/template.css">
    <link rel="stylesheet" type="text/css" href="public/css/home.css">
</head>
<body>
         <div id="container">
            <div class="col1">
                <div class="row1-col1">
                     <img id="profil" src="public/avatars/<?php echo $data["login"];?>.jpg">
                </div>
                <div class="row2-col1">
                    <p id="info">
                        Numéro de matricule : <span> <?php if ($data["statut"] == 3) {echo $data["matricule"];} else {echo "*";}?> </span> <br/>

                        Grade : <span> <?php if ($data["statut"] == 3) {echo $data["grade"];} else {echo "*";} ?> </span> <br/>

                        Nom : <span> <?php echo $data["nom"]; ?> </span> <br/>

                        Prénom : <span> <?php echo $data["prenom"]; ?> </span> <br/>

                        Date de naissance : <span> <?php echo $data["naissance"]; ?> </span> <br/>

                        Nationalité : <span> <?php echo $data["nationalite"]; ?> </span> <br/>

                        Caserne de rattachement : <span> <?php if ($data["statut"] == 3) {echo $caserne[$data['caserne']]["ville"];} else {echo "*";} ?> </span> <br/>

                        Corps d'armée : <span> <?php if ($data["statut"] == 3) {echo $corps[$data["corps"]]['type'];} else{ echo "*";} ?></span> <br/>

                        Adresse email : <span> <?php echo $data["mail"]; ?> </span> <br/>

                        Statut : <span><?php switch ($data["statut"]) {
                                                    case '1':
                                                        echo "Administrateur";
                                                        break;
                                                                    
                                                    case '2':
                                                        echo "Ressources Humaines";
                                                        break;
                                                                        
                                                    case '3':
                                                        echo "Militaire";
                                                        break;
                                                    }
                                                    ;?></span> <br/>
                    </p>
                    <li><a href="modifier">Modifier mes informations </a></li>
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
                    <center><li id="bt2"><a href="result" id="button2"> Accèder à mes résultats</a></li></center>
                </div>
                <div class="row4-col2">
                     <center><li id="bt1"><a id="button" href="home/disconnect">Déconnexion</a></li></center>
                </div> 
            </div>


            <div class="col3">
                <div class="row1-col3">
                    <center><H3> Agenda des rendez-vous à venir </H3></center><br>
                    
                    <p>
                      <?php
                        if ($data["statut"] == 3) {
                           foreach ($test as $i){
                                if ($i['statut'] == 0){
                                echo ' Le ' . $i['date'] . ' à ' . $i['heure'] . "</br>";
                                    }  
                                }       
                            }
                        ?>
                    </p>
                </div>    
            </div> 
         </div>
</body>
</html>
