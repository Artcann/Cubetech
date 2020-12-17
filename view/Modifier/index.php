<?php

$this->title = "Modifier vos informations";
$this->style = "public/css/modifier.css";
$this->script = "public/js/home.js";
$this->script = "public/js/modifier.js";
?>
<a onload="adminAccess()" href="Adminhome" id="adminAccess" style="display: none">Accès BackOffice</a>

<div class="bienvenue">
    <?php /** @noinspection PhpUndefinedVariableInspection */
    echo "<h1>Bienvenue ". $data['prenom'] . " sur la page pour modifier vos informations</h1>" ?>

</div>
<div class="container">

    <div class="informations">
        <div class="head">
            <img alt="" id="profil" src="public/avatars/<?php echo $data["login"];?>.jpg">
            <div class="name">
                <h3> <?php echo $data['prenom'] ." " . $data['nom'] ?></h3>
                <p> <span> <?php if ($data["statut"] == 3) {echo $data["matricule"];} else {echo "*";}?> </span> </p>
            </div>
        </div>
        <div class="description">
            Numéro de matricule :<span> <?php if ($data["statut"] == 3) {echo $data["matricule"];} else {echo "*";}?> </span> <br/>

            Grade : <span> <?php if ($data["statut"] == 3) {echo $data["grade"];} else {echo "*";} ?> </span> <br/>

            Nom : <span> <?php echo $data["nom"]; ?> </span> <br/>

            Prénom : <span> <?php echo $data["prenom"]; ?> </span> <br/>

            Date de naissance : <span> <?php echo $data["naissance"]; ?> </span> <br/>

            Nationalité : <span> <?php echo $data["nationalite"]; ?> </span> <br/>

            Adresse email : <span> <?php echo $data["mail"]; ?> </span> <br/>

            Statut :<span><?php switch ($data["statut"]) {
                    case '1':
                        echo "Administrateur";
                        break;

                    case '2':
                        echo "Ressources Humaines";
                        break;

                    case '3':
                        echo "Militaire";
                        break;
                }
                ;?></span> <br/>
        </div>
    </div>


    <div class="col2">
        <div class="explication">
            Bonjour, bienvenue sur la page qui permet de modfiier votre compte. <?php switch ($data["statut"]) {
                    case '1':
                        echo "Vous êtes administrateur, vous avez le droit de tout modifier ! ";
                        break;

                    case '2':
                        echo "Vous êtes RH, vous avez le droit de tout modfiier ! ";
                        break;

                    case '3':
                        echo "Vous ne pouvez que modifier votre mot de passe, si vous voulez procédé à d'autres changements n'hésitez pas à écrire un mail à <b> contact@cubetech.fr</b>";
                        break;}; ?>

        </div>
        <div class="formulaire">
            <form action="modifier/modifier" name="modifier" method="post">
                <label for="verifiedPassword">Ancien Mot de Passe :</label><input type="password" name="verifiedPassword" id="verifiedPassword">
                <label for="password">Nouveau Mot de Passe :</label><input type="password" name="password" id="password">
                <span id="test"></span> <span id="same"></span>
                <input id="submit" type="submit" value="Changer le mdp">
            </form>
        </div>
        <div class="deconnexion">
            <a href="Home/disconnect">Disconnect</a>
        </div>

    </div>


</div>
