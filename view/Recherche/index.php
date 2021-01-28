<?php
$this->title='Formulaire de recherche | Cubetech';
#$this->style='public/css/styleRform.css';
/*$this->script='recherche.js';*/
?>

<div class="form-container">
  <form method="post" action="recherche/result" id="formulaire">
      <legend>Veuillez remplir les champs souhaités:</legend>
        <label for="identifiant"><?php echo TXT_LBL1_RECH; ?> :</label>
        <input type="text" name="identifiant" id="identifiant" value=""/><br>
        <label for="nom"><?php echo TXT_LBL2_RECH; ?> :</label>
        <input type="text" name="nom" id="nom" value=""/><br>
        <label for="nom"><?php echo TXT_LBL3_RECH; ?> :</label>
        <input type="text" name ="prenom" id="prenom" value=""/><br>
        <label for="nom"><?php echo TXT_LBL4_RECH; ?> :</label>
        <input type="text" name="âge" id="date" value=""/><br>
        <label for="nom"><?php echo TXT_LBL5_RECH; ?> :</label>
        <input type="text" name="caserne" id="caserne" value=""/><br>
        <!-- TODO GRADE SELECT INPUT -->
        <label for="nom"><?php echo TXT_LBL6_RECH; ?> :</label>
        <input type="text" name="nationalité" id="nationalité" value=""/><br>
        <label for="nom"><?php echo TXT_LBL7_RECH; ?> :</label>
        <input type="text" name="corps militaire" id="corps" value=""/><br>
        <label for="nom"><?php echo TXT_LBL8_RECH; ?> :</label>
        <input type="text" name="statut" id="statut" value=""/><br>
        <label for="nom"><?php echo TXT_LBL9_RECH; ?> :</label>
        <input type="text" name="matricule" id="matricule" value=""/><br>
        <label for="nom"><?php echo TXT_LBL10_RECH; ?> :</label>
        <input type="text" name="login" id="login" value=""/><br>
        <button type="submit">Rechercher</button>
        <button type="reset">Effacer</button>
  </form>
</div>