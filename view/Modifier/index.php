<?php

$this->title = "Modifier vos informations | Cubetech";
$this->style = "public/css/modifier.css";
$this->script = "public/js/home.js";
$this->script = "public/js/modifier.js";
?>
<a onload="adminAccess()" href="Adminhome" id="adminAccess" style="display: none">Accès BackOffice</a>
<script> let statut="<?php echo $scriptData['statut']?>"; </script>

<div id="container">

  <div class="bienvenue">

      <h1>Bienvenue  <?php echo $data['prenom'] ?> </h1>

  </div>
  <div class="date" id="nowDate">

  </div>
    <div class="informations">
        <div class="tete">
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
            Bienvenue sur la page de votre compte ce <span id="jour"></span>   <?php switch ($data["statut"]) {
                    case '1':
                        echo "Vous êtes administrateur, vous avez le droit de tout modifier ! ";
                        break;

                    case '2':
                        echo "Vous êtes RH, vous avez le droit de tout modfiier ! ";
                        break;

                    case '3':
                        echo "Vous ne pouvez que modifier votre mot de passe, si vous voulez procédé à d'autres changements n'hésitez pas à écrire un mail à <b> contact@cubetech.fr</b>";
                        break;}; ?>
            <div id="faireModif">Si vous souhaitez faire des modifications, cliquez ici. </div>
        </div>
        <div id="formulaire">
            <form action="modifier/modifier" name="modifier" method="post">
              <span id="errorMsg"><?php echo $error ?></span></br>
                <label for="verifiedPassword">Ancien Mot de Passe :</label><input type="password" name="verifiedPassword" id="verifiedPassword">
                <label for="newPass">Nouveau Mot de Passe :</label><input type="password" name="password" id="password">
                <label for="confirmNewPass">Confirmez-le :</label><input type="password" name="confirmNewPass" id="confirmNewPass">
                <span id="test"></span> <span id="same"></span>
                <div id="bas">
                <input id="submit" type="submit" value="Changez">
                <div id="close"> Abandonnez </div>
              </div>
            </form>

        </div>
        <div id="agenda">
          <div class="row1-col3">
            <H3 id ="agenda"> Agenda des rendez-vous à venir </H3><br>

            <div class="table-container">
                <table class="tableau">
                    <tbody>
                        <?php /** @noinspection PhpUndefinedVariableInspection */
                        foreach($test as $k): ?>
                            <tr>
                                <td><?php echo $k; ?></td>
                                <td><a href=""><img class="alert" src="public/images/notification.png" data-alt-src="public/images/alert2.png"></center></a></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>

            <div class="table-container">
                <table class="table">
                    <tbody>
                        <?php /** @noinspection PhpUndefinedVariableInspection */
                        foreach($tableauTestRh as $k): ?>
                            <tr>
                                <td><?php echo $k; ?></td>
                                <td><a href=""><img class="alert" src="public/images/notification.png" data-alt-src="public/images/alert2.png"></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
        </div>

        <div class="deconnexion">
            <a href="Home/disconnect">Disconnect</a>
        </div>

    </div>


</div>
