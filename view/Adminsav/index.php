<?php

$this->title = "AdminSav";
$this->style = "public/css/index.css";
$this->script = "public/js/home.js";
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="public/css/adminSav.css">
</head>
<body>
	<div>
	<h1> Rendez-vous </h1>

	<?php foreach ($rdv as $key) {
		echo '<center>' . '<p>' . $key['date'] . ' : ' . $key['idUser'] . ' : ' . $key['contenu'] . ' ' . '<a href=""> répondre </a>' . '</p>' . '</br>' . '</center>';
	}
	?>

    <h1> BUG </h1>

 	<?php foreach ($bug as $key) {
		echo '<center>' . '<p>' . $key['date'] . ' : ' . $key['idUser'] . ' : ' . $key['contenu'] . ' ' . '<a href=""> répondre </a>'. '</p>' . '</br>' . '</center>';
	}
	?>

	<h1> Suggestion </h1>

	<?php foreach ($suggestion as $key) {
		echo '<center>' . '<p>' . $key['date'] . ' : ' . $key['idUser'] . ' : ' . $key['contenu'] . ' ' . '<a href=""> répondre </a>'. '</p>' . '</br>' . '</center>';
	}
	?>
	</div>
</body>
</html>

