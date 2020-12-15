<?php

$this->title = "Rechercher un militaire";
$this->style = "public/css/styleR.css";
?>

<?php include_once "view/header.html"; ?>

<div>
	<h1 id="titre">Voici le résultat de votre recherche :<h1>
<table cellspacing="20">
	<tr>
	<th>Nom</th>
	<th>Pénom</th>
	<th>Login</th>
	<th>Mail</th>
	<th>Date de naissance</th>
	<th>Nationalité</th>
	<th>Statut</th>
	<th>Grade</th>
	<th>Corps d'armée</th>
	<th>Caserne de rattachement</th>
	<th>Matricule</th>
	</tr>
	<tr>
	<?php foreach($row=mysql_fetch_array($resultat) as $row)
		{echo "<tr>
		<th class="texte">".$row["nom"].</th>
		<th class="texte">".$row["nom"].</th>
		<th class="texte">".$row["prenom"].</th>
		<th class="texte">".$row["login"].</th>
		<th class="texte">".$row["mail"].</th>
		<th class="texte">".$row["naissance"].</th>
		<th class="texte">".$row["nationalite"].</th>
		<th class="texte">".$row["statut"].</th>
		<th class="texte">".$row["grade"].</th>
		<th class="texte">".$row["corps"].</th>
		<th class="texte">".$row["caserne"].</th>
		<th class="texte">".$row["matricule"].</th>
		       </tr>";}
	?>
	</tr>
</table>
</div>


<?php include_once "view/footer.html"; ?>
