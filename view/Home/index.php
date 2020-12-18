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
                     <div class="col2-row1-col1">
                       <b><?php echo $data['prenom'] ." " . $data['nom'] ?> </b></br>
                       <?php if ($data["statut"] == 3) {echo $data["matricule"];} else {echo "*";}?>
                     </div>
                </div>
                <div class="row2-col1">
                    <p id="info">

                        Grade : <span> <?php echo $data["grade"];?> </span> <br/>

                        Date de naissance : <span> <?php echo $data["naissance"];?> </span> <br/>

                        Nationalité : <span> <?php echo $data["nationalite"];?> </span> <br/>

                        Caserne de rattachement : <span> <?php echo $caserne[$data['caserne']]["ville"];?> </span> <br/>

                        Corps d'armée : <span> <?php echo $corps[$data["corps"]]['type'];?></span> <br/>

                        Adresse email : <span> <?php echo $data["mail"];?> </span> <br/>

                        Statut : <span> <?php echo $data["statut"];?> </span> <br/>

                    </p>
                    <li></br><a href="modifier">Modifier mes informations </a></li>
                </div>
            </div>

            <div class="col2">
                <div class="row1-col2">
                    <center><p><img src="public/images/logo.png"></p></center>
                </div>
                <div class="row2-col2">
                    <h1>

                       Bienvenue <span><?php echo $data["prenom"];?></span> sur le site CubeTech

                    </h1>
                </div>
                <div class="row3-col2">
                    <li id="bt2"><a href="result" id="button2"> Accèder à mes résultats</a></li>
                </div>
                <div class="row4-col2">
                     <li id="bt1"><a id="button" href="home/disconnect">Déconnexion</a></li>
                </div>
            </div>


            <div class="col3">
                <div class="row1-col3">
                    <center><H3> Agenda des rendez-vous à venir </H3></center><br>

                    <div class="listeRDV">
                      <?php
                      if(empty($test)){
                        echo "Vous n'avez pas de rendez-vous de prévu.";
                      }else{
                            foreach ($test as $i){
                                echo $i;
                            }}

                        ?>
                    </div>
                </div>
            </div>
         </div>
</body>
</html>
