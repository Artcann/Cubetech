<?php
$this->style = "public/css/contact.css";
?>

<form id="contact" action="contact" method="post">
    <div class="select-style">
    <select name="type">
        <option value="">--Choisissez une option--</option>
        <option value="rendez-vous">Rendez-vous</option>
        <option value="Bug">Bug</option>
        <option value="suggestion">Suggestion</option>
    </select>
    </div>
    <p>
    <label id="title" for="contenu"> Votre message:</label>
    </p>
    <textarea id="contenu" name="message" cols="45" rows="20" placeholder="Votre message...">
    </textarea>
    <p>
    <input id="contactsubmit" type="submit" value="Valider">
    </p>
</form>

