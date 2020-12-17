<?php

$this->title = "Acceuil Adminhome";
$this->style = "public/css/adminHome.css";

?>

<div id="container">
    <div class="row-1">
        <?php echo "<h1>Bienvenue ".$this->sanitize($prenom)." sur le backoffice de  CubeTech</h1>" ?>
    </div>
    <div class="row-2">
        <div class="row-2-col-1">
            <h3>Gestion des utilisateurs</h3>
            <a class=button href="adminuser">Afficher les utilisateurs</a>
            <a class=button href="adminhome/register">Enregistrer un nouvel utilisateur</a>
            <h3>Gestion des tickets</h3>
            <a class=button href="adminsav">Afficher les tickets</a>
        </div>
        <div class="row-2-col-2">
            <h3>Gestion des cartes</h3>
            <a class=button href="admincard">Afficher les cartes</a>
            <a class=button href="admincard/create">Créer une nouvelle carte</a>

    </div>


</div>
