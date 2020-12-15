<?php
$this->style = "public/css/index.css";
?>
<form action="contact" method="post">
    <select name="type">
        <option value="">--Choisissez une option--</option>
        <option value="rendez-vous">rendez-vous</option>
        <option value="Bug">Bug</option>
        <option value="suggestion">suggestion</option>
    </select>
    <p>
    <label for="contenu"> Votre message:</label>
    </p>
    <textarea id="contenu" name="message" cols="45" rows="20" placeholder="Votre message...">
    </textarea>
    <input type="submit" value="Valider">
</form>
