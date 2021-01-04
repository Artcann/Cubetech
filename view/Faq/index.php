<?php

$this->title = "FAQ";

$this->style = "public/css/faq.css";
$this->script = "public/js/faq.js";


?>
<br/>

<div class="scroller">
    <h1>Foire Aux Questions </h1><br/>
    <?php
    foreach ($data as $datum) {
        echo '<h2>'.$datum['titre'].'</h2>';
        echo '<br/>';
        echo '<p class="blockcgu">'.$datum['contenu'].'</p>';
        echo '<br/>';
    }
    ?>
    <div class="popup" onclick="myFunction()">Test
    <span class="textPopUp" id="PopUp">Une question n'a pas été posé? Cliquez ici </span></div>
</div>

