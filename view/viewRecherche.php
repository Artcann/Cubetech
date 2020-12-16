*<?php

$this->title = "Rechercher un militaire";
$this->style = "public/css/styleR.css";
?>

<?php include_once "view/header.html"; ?>
<?php include_once "styleR.css"; ?>

<div>
	<h1 id="titre">Voici le résultat de votre recherche :<h1>
<table cellspacing="20">
	<tr>
	<th class="texte">Nom</th>
	<th class="texte">Pénom</th>
	<th class="texte">Login</th>
	<th class="texte">Mail</th>
	<th class="texte">Date de naissance</th>
	<th class="texte">Nationalité</th>
	<th class="texte">Statut</th>
	<th class="texte">Grade</th>
	<th class="texte">Corps d'armée</th>
	<th class="texte">Caserne de rattachement</th>
	<th class="texte">Matricule</th>
	</tr>
	<tr>
	<?php foreach($row=mysql_fetch_array($resultat) as $row)
		{echo "<tr>
		<th>.$row["nom"].</th>
		<th>.$row["prenom"].</th>
		<th>.$row["login"].</th>
		<th>.$row["mail"].</th>
		<th>.$row["naissance"].</th>
		<th>.$row["nationalite"].</th>
		<th>.$row["statut"].</th>
		<th>.$row["grade"].</th>
		<th>.$row["corps"].</th>
		<th>.$row["caserne"].</th>
		<th>.$row["matricule"].</th>
			</tr>";}
	?>
	</tr>
</table>
</div>


<?php include_once "view/footer.html"; ?>
