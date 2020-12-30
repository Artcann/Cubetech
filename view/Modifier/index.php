<?php

$this->title = "Modifier vos informations";
$this->style = "public/css/index.css";
$this->script = "public/js/home.js";
?>
<a onload="adminAccess()" href="Adminhome" id="adminAccess" style="display: none">Accès BackOffice</a>
<?php /** @noinspection PhpUndefinedVariableInspection */
echo "<h1>Bienvenue ". $data['prenom'] . " sur le site CubeTech</h1>" ?>



<div>
    <h2>
        <?php echo
            "Numéro de matricule: "  . $data["matricule"] . "<br/>" .
            "Grade : " . $data["grade"] . "<br/>" .
            "Nom : " . $data["nom"] . "<br/>" .
            "Prénom : " . $data['prenom'] . "<br/>" .
            "Date de naissance : " . $data['naissance'] . "<br/>" .
            "Nationalité : " . $data['nationalite'] . "<br/>" .
            "Caserne de rattachement : " . $data['caserne'] . "<br/>" .
            "Corps d'armée : " . $data['corps'] . "<br/>" . $data['mail'] ?>
    </h2>
    <h3>
        <form action="modifier/modifier" name="modifier" method="post">
            <label for="password">Mdp :</label><input type="password" name="password" id="password">

        </form>
    </h3>

</div>

<a href="#"> Accèder à mes résultats </a>
<a href="Home/disconnect">Disconnect</a>