<?php
$this->title = "Inscription";
$this->style = "public/css/index.css";
$this->script = "public/js/register.js";
?>

<?php include_once "view/header.html"; ?>

<h1>Inscription</h1>

<h3>Veuillez remplir le formulaire</h3>

<form action="register/register" name="register" method="post">
    <div>
        <label for="nom">Nom : </label><input type="text" name="nom" id="nom" required>
    </div>
    <div>
        <label for="prenom">Prénom : </label><input type="text" name="prenom" id="prenom" required>
    </div>
    <div>
        <label for="date">Date de Naissance :</label><input type="date" name="date" id="date" required>
    </div>
    <div>
        <label for="statut">Niveau d'habilitation : </label>
        <select name="statut" id="statut">
            <option value="">--Choose an option--</option>
            <option value="1">Admin</option>
            <option value="2">RH</option>
            <option value="3">Utilisateur</option>
        </select>
    </div>
   <div>
        <label for="grade">Grade :</label><input type="text" name="grade" id="grade">
    </div>
    <div>
        <label for="nationalite">Nationalité :</label><input type="text" name="nationalite" id="nationalite">
    </div>
    <div>
        <label for="caserne">Caserne :</label><input type="text" name="caserne" id="caserne">
    </div>
     <div>
        <label for="corps">Corps :</label><input type="text" name="corps" id="corps">
    </div>
     <div>
        <label for="matricule">Matricule :</label><input type="text" name="matricule" id="matricule">
    </div>
    <div>
        <label for="mail">Mail :</label><input type="text" name="mail" id="mail">
    </div>
    <div>
        <label for="password">Mot de passe : </label><input type="password" name="password" id="password" required>
    </div>
    <div>
        <label for="password2">Confirmer mot de passe : </label><input type="password" name="password2" id="password2" required>
    </div>
    <div onclick="return validateRegister();">
        <label for="submit">Envoyer</label><input type="submit">
    </div>
</form>

<?php include_once "view/footer.html"; ?>


