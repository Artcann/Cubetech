<?php
$this->title = "Creation Cartes";
$this->style = "public/css/index.css";
$this->script = "public/js/register.js";

?>

<h1>Ajouter une carte de test</h1>
<form action="admincard/create_post" method="post">
    <label for="statut">Etat de la carte :</label>
    <select name="statut" id="statut">
        <option value="">--Choisissez une option--</option>
        <option value="1">Déployée</option>
        <option value="2">En réparation</option>
        <option value="3">En attente de déploiment</option>
    </select>
    <label for="date">Entrez la date de sortie d'usine de la carte</label>
    <input type="date" name="creationDate" id="date">
    <div onclick="return validateForm();">
        <input type="submit" id="submit-button">
    </div>

</form>