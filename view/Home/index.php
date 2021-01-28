<?php

$this->title = "Accueil | Cubetech";
$this->script = "public/js/home.js";
$this->style = "public/css/home.css"
?>


<script> let statut="<?php echo $scriptData['statut']?>"; </script>

<div id="container">
  <div class="col1">
        <div class="row1-col1">

        </div>
        <div class="row2-col1">
            <h1><?php echo TXT_TITRE1_HOME . ' ' . $data['prenom'] . ' ' . TXT_TITRE2_HOME; ?></h1>
        </div>
        <div class="row3-col1">
          <li id="bt1"><a href="result" id="button1"> <?php echo TXT_BT1_HOME ;?></a></li>
          <li id="bt2"><a href="result" id="button2"> <?php echo TXT_BT2_HOME ;?></a></li>
          <li><a href="recherche" id="button4"><?php echo TXT_BT4_HOME ;?></a></li>
          <li id="bt3"><a href="home/disconnect" id="button3"><?php echo TXT_BT3_HOME ;?></a></li>
        </div>
        </div>
        <div class="row4-col1">
          <a class="rickroll" target="_blank" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"></a>
        </div>
      </div>
