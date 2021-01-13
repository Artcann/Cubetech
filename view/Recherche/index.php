<?php
$this->title='Formulaire page Recherche';
$this->style='public/css/styleRform.css';
/*$this->script='recherche.js';*/
?>

<html>
<body>
<form method="post" action="recherche/result" id="formulaire">
<fieldset>
    <legend>Veuillez remplir les champs souhaités:</legend>
    <pre><table>
      <tr><td align="left">Identifiant :</td><td align="center"><input type="text" name="identifiant" id="identifiant" value=" "></input></td></tr>
      <tr><td align="left">Nom :</td><td align="center"><input type="text" name="nom" id="nom" ></input></td></tr>
      <tr><td align="left">Prénom :</td><td align="center"><input type="text" name ="prenom" id="prenom"/></td></tr>
      <tr><td align="left">Naissance :</td><td align="center">&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="âge" id="date"/></td></tr>
      <tr><td align="left">Grade :</td><td align="center">&nbsp;&nbsp;&nbsp;&nbsp;<select><option value="">--Choisissez une option--</option>
            <option value="général">Général</option>
            <option value="capitaine">Capitaine</option>
            <option value="lieutenant">Lieutenant</option>
            <option value="sergent">Sergent</option>
            <option value="soldat">Soldat</option></select>    
      <tr><td align="left">Caserne :</td><td align="center">&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="caserne" id="caserne"/></td></tr>
      <tr><td align="left">Nationalité :</td><td align="center">&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="nationalité" id="nationalité"/></td></tr>
      <tr><td align="left">Corps militaire :</td><td align="center"><input type="text" name="corps militaire" id="corps"/></td></tr>
      <tr><td align="left">Statut :</td><td align="center"><input type="text" name="statut" id="statut"/></td></tr>
      <tr><td align="left">Matricule :</td><td align="center">&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="matricule" id="matricule"/></td></tr>
      <tr><td align="left">Login :</td><td align="center">&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="login" id="login"></input></td></tr></table>
      <button type="submit">Rechercher</button>&nbsp;&nbsp;&nbsp;<button type="reset">Effacer</button>
    </pre>
</fieldset>
</body>
</html>
