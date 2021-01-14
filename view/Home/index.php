<?php

$this->title = "Accueil";
$this->script = "public/js/home.js";
$this->style = "public/css/home.css"
?>

<script> let statut="<?php echo $scriptData['statut']?>"; </script>

<div id="container">
  <div class="col1">
        <div class="row1-col1">

        </div>
        <div class="row2-col1">
             <h1>Bienvenue <span><?php echo $data["prenom"];?></span> sur le site CubeTech</h1>
             <i class="fas fa-cat"></i>
        </div>
         <div class="row3-col1">
           <li id="bt1"><a href="result" id="button1"> Prendre un rendez-vous</a></li>
           <li id="bt2"><a href="result" id="button2"> Accèder à mes résultats</a></li>
           <li id="bt3"><a href="home/disconnect" id="button3"> Deconnexion</a></li>
         </div>
         </div>

    </div>
</div>
