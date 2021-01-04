<?php

$this->title = "Accueil Admin Faq";
$this->style = "public/css/adminFaq.css";
$this->script = "public/js/adminFaq.js";
?>

<div id="container">
    <textarea class="textarea" id='title'><?php echo $faq['titre']?></textarea></br>
    <textarea class="textarea" id='content'><?php echo $faq['contenu'] ?></textarea></br>
    <input id='valid' type='button' value="Modifier">
</div>