<?php
$this->title='Formulaire de recherche | Cubetech';
#$this->style='public/css/styleRform.css';
/*$this->script='recherche.js';*/
?>

<html>
<body>
<form method="post" action="recherche/result" id="formulaire">
<fieldset>
    <legend>Veuillez remplir les champs souhaités:</legend>
      <input type="text" name="identifiant" id="identifiant" value=""/><br>
      <input type="text" name="nom" id="nom" value=""/><br>
      <input type="text" name ="prenom" id="prenom" value=""/><br>
      <input type="text" name="âge" id="date" value=""/><br>
      <input type="text" name="caserne" id="caserne" value=""/><br>
      <!-- TODO GRADE SELECT INPUT -->
      <input type="text" name="nationalité" id="nationalité" value=""/><br>
      <input type="text" name="corps militaire" id="corps" value=""/><br>
      <input type="text" name="statut" id="statut" value=""/><br>
      <input type="text" name="matricule" id="matricule" value=""/><br>
      <input type="text" name="login" id="login" value=""/><br>
      <button type="submit">Rechercher</button><button type="reset">Effacer</button>
</body>
</html>