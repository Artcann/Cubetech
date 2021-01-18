<?php
$this->title='Formulaire page Recherche';
$this->style='public/css/recherche.css';
?>

<html>
<body><br>
<form method="post" action="recherche/result">
<fieldset>
      <legend align="center" id="titre">Veuillez remplir les champs souhaités :</legend>
      <input type="text" name="identifiant" id="identifiant" value="" placeholder="Identifiant"/><br><br>
      <input type="text" name="nom" id="nom" value="" placeholder="Nom"/><br><br>
      <input type="text" name ="prenom" id="prenom" value="" placeholder="Prénom"/><br><br>
      <input type="text" name="âge" id="date" value="" placeholder="Date de naissance"/><br><br>
      <input type="text" name="caserne" id="caserne" value="" placeholder="Caserne"/><br><br>
      <select><option value=""><strong>----Selectionnez un grade----</strong></option>
            <option value="général">Général</option>
            <option value="capitaine">Capitaine</option>
            <option value="lieutenant">Lieutenant</option>
            <option value="sergent">Sergent</option>
            <option value="soldat">Soldat</option></select><br><br>
      <input type="text" name="nationalité" id="nationalité" value="" placeholder="Nationalité"/><br><br>
      <input type="text" name="corps militaire" id="corps" value="" placeholder="Corps militaire"/><br><br>
      <input type="text" name="statut" id="statut" value="" placeholder="Statut"/><br><br>
      <input type="text" name="matricule" id="matricule" value="" placeholder="Matricule"/><br><br>
      <input type="text" name="login" id="login" value="" placeholder="Login"/><br><br>
      <button type="submit">Rechercher</button><button type="reset">Effacer</button><br>
</fieldset>
</body>
</html>
