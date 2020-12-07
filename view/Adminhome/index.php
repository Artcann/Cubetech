<?php

$this->title = "Acceuil Adminhome";
$this->style = "public/css/index.css";

?>

<?php /** @noinspection PhpUndefinedVariableInspection */
echo "<h1>Bienvenue ".$this->sanitize($prenom)." sur le backoffice de  CubeTech</h1>" ?>

<img id="LogoPNG" src="public/images/logo.png" alt="Logo du site">

<a class=button href="Adminhome/register">Enregistrer un nouvel utilisateur</a>

<a class=button href="Adminuser">Afficher les utilisateurs</a>

<a class=button href="Admincard">Afficher les cartes</a>
<a class=button href="Admincard/create">Créer une nouvelle carte</a>

<a class=button href="Adminhome/disconnect">Disconnect</a>

<?php include_once "view/footer.html"; ?>