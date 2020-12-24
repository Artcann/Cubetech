<?php

$this->title = "AdminSav";
$this->style = "public/css/index.css";
$this->script = "public/js/adminSav.js";
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="public/css/adminSav.css">
</head>
<body>

	<center>

	<h1> Rendez-vous </h1>

	<div class="tableau1">

		<table class="tableauRdv">
	    <thead>
	    <tr>
	        <td>IdUser</td>
	        <td>Date</td>
	        <td>Contenu</td>
	        <td>Contact</td>
	        <td>Valider</td>
	    </tr>
	    </thead>
	    <tbody>
	    <?php /** @noinspection PhpUndefinedVariableInspection */
	    foreach($rdv as $k => $v): ?>
	        <tr>
	            <td><?php echo $v['idUser']; ?></td>
	            <td><?php echo $v['date']; ?></td>
	            <td><?php echo $v['contenu']; ?></td>
	            <td><a href=""><center><img class="mail" src="public/images/mail.png" data-alt-src="public/images/mail2.png"></center></a></td>
	            <td class="valider"><a href=""><center><img class="valider" src="public/images/valider.png" data-alt-src="public/images/valider1.png"></center></a></td>
	        </tr>
	    <?php endforeach ?>
	    </tbody>
	    </table>

	</div>


    <h1> Bug </h1>

    <div class="tableau2">

	    <table class="tableauBug">
	    <thead>
	    <tr>
	        <td>IdUser</td>
	        <td>Date</td>
	        <td>Contenu</td>
	        <td>Contact</td>
	        <td>Valider</td>
	    </tr>
	    </thead>
	    <tbody>
	    <?php /** @noinspection PhpUndefinedVariableInspection */
	    foreach($bug as $k => $v): ?>
	        <tr>
	            <td><?php echo $v['idUser']; ?></td>
	            <td><?php echo $v['date']; ?></td>
	            <td><?php echo $v['contenu']; ?></td>
	           	<td><a href=""><center><img class="mail" src="public/images/mail.png" data-alt-src="public/images/mail2.png"></center></a></td>
	            <td class="valider"><a href=""><center><img class="valider" src="public/images/valider.png" data-alt-src="public/images/valider1.png"></center></a></td>
	        </tr>
	    <?php endforeach ?>
	    </tbody>
	    </table>

	</div>


    <h1> Suggestion </h1>


    <div class="tableau3">

	    <table class="tableauSuggestion">
	    <thead>
	    <tr>
	        <td>IdUser</td>
	        <td>Date</td>
	        <td>Contenu</td>
	        <td>Contact</td>
	        <td>Valider</td>
	    </tr>
	    </thead>
	    <tbody>
	    <?php /** @noinspection PhpUndefinedVariableInspection */
	    foreach($suggestion as $k => $v): ?>
	        <tr>
	            <td><?php echo $v['idUser']; ?></td>
	            <td><?php echo $v['date']; ?></td>
	            <td><?php echo $v['contenu']; ?></td>
	           	<td><a href=""><center><img class="mail" src="public/images/mail.png" data-alt-src="public/images/mail2.png"></center></a></td>
	            <td class="valider"><a href=""><center><img class="valider" src="public/images/valider.png" data-alt-src="public/images/valider1.png"></center></a></td>
	        </tr>
	    <?php endforeach ?>
	    </tbody>
	    </table>

	</div>

	</center>

</body>
</html>

