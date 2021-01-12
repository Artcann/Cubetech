<?php

$this->title = "FAQ";

$this->style = "public/css/faq.css";
$this->script = "public/js/faq.js";


?>
<div class="container">
    <h1>Foire Aux Questions </h1><br/>
    <?php
    foreach ($data as $datum) {
        echo MarkdownParser::render($datum['titre']);
        echo '<br/>';
        echo MarkdownParser::render($datum['contenu']);
        echo '<br/>';
    }
    ?>
    <div class="popup" onclick="myFunction()">Test
    <span class="textPopUp" id="PopUp">Une question n'a pas été posé? Cliquez ici </span></div>
</div>

