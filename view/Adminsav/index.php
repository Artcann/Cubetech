<?php

$this->title = "AdminSav";
$this->style = "public/css/adminSav.css";
$this->script = "public/js/adminSav.js";
?>

	<div class="table-container">
		<h1> Rendez-vous </h1>

		<table class="table">
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
                <td class="valider"><a href="adminsav/archive/<?php echo $v['id']?>/<?php echo $v['idUser']?>"><center><img class="valider" src="public/images/valider.png" data-alt-src="public/images/valider1.png"></center></a></td>
                    </td>
	        </tr>
	    <?php endforeach ?>
	    </tbody>
	    </table>

    	<h1> Bug </h1>

	    <table class="table">
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
	            <td class="valider"><a href="adminsav/archive/<?php echo $v['id'].'/'.$v['idUser']?>"><center><img class="valider" src="public/images/valider.png" data-alt-src="public/images/valider1.png"></center></a></td>
	        </tr>
	    <?php endforeach ?>
	    </tbody>
	    </table>

    	<h1> Suggestion </h1>

	    <table class="table">
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
	            <td class="valider"><a href="adminsav/archive/<?php echo $v['id']?>"><center><img class="valider" src="public/images/valider.png" data-alt-src="public/images/valider1.png"></center></a></td>
	        </tr>
	    <?php endforeach ?>
	    </tbody>
	    </table>

	</div>
</body>
</html>

