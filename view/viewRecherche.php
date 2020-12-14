<?php

$this->title = "Rechercher un militaire";
$this->style = "public/css/styleR.css";
?>

<?php include_once "view/header.html"; ?>

<?php foreach($row=mysql_fetch_array($resultat) as $row)?>
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
	<?php echo
		"<th>".$row["nom"]."</th>"
		"<th>".$row["prenom"]."</th>"
		"<th>".$row["login"]."</th>"
		"<th>".$row["mail"]."</th>"
		"<th>".$row["naissance"]."</th>"
		"<th>".$row["nationalite"]."</th>"
		"<th>".$row["statut"]."</th>"
		"<th>".$row["grade"]."</th>"
		"<th>".$row["corps"]."</th>"
		"<th>".$row["caserne"]."</th>"
		"<th>".$row["matricule"]."</th>"
	?>
	</tr>
</table>
</div>


<?php include_once "view/footer.html"; ?>
