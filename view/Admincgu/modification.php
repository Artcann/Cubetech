<?php
$this->title = "Accueil Admin CGU";
$this->script = "public/js/adminFaq.js";
?>

<div class="form-container">
    <label for="title">Titre de la question</label></br>
    <textarea class="textarea" id='title'><?php echo $cgu['titre']?></textarea></br>
    
    <label for="content">Contenu de la réponse</label></br>
    <textarea class="textarea" id='content'><?php echo $cgu['contenu'] ?></textarea></br>
    
    <input id='valid' type='button' value="Modifier">
</div>