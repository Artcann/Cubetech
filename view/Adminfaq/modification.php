<?php

$this->title = "Accueil Admin Faq";
$this->style = "public/css/adminFaq.css";
$this->script = "public/js/adminFaq.js";
?>

<div id="container">
    <label for="title">Titre de la question</label></br>
    <textarea class="textarea" id='title'><?php echo $faq['titre']?></textarea></br>
    
    <label for="content">Contenu de la réponse</label></br>
    <textarea class="textarea" id='content'><?php echo $faq['contenu'] ?></textarea></br>
    
    <input id='valid' type='button' value="Modifier">
</div>