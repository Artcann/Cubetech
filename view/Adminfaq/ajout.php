<?php

$this->title = "Ajout Admin Faq";
$this->style = "public/css/adminFaq.css";
$this->script = "public/js/adminFaq.js";
?>

<div id="container">
    <form action="adminfaq/ajoutpost" method="post">
        <label for="title">Titre de la question</label></br>
        <textarea class="textarea" id='title' name="title"></textarea></br>
        
        <label for="content">Contenu de la réponse</label></br>
        <textarea class="textarea" id='content' name="content"></textarea></br>
        
        <input id='valid' type='submit' value="Ajouter">
    </form>
</div>