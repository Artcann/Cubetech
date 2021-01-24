<?php

$this->title = "SAV Administrateur | Cubetech";
$this->style = "public/css/adminSav.css";
$this->script = "public/js/adminSav.js";
?>

	<div class="table-container">
		<h1> <?php echo TXT_TITRE1_SAV;?> </h1>

		<table class="table">
	    <thead>
	    <tr>
	        <td><?php echo TXT_TD1_SAV;?></td>
	        <td><?php echo TXT_TD2_SAV;?></td>
	        <td><?php echo TXT_TD3_SAV;?></td>
	        <td><?php echo TXT_TD4_SAV;?></td>
	        <td><?php echo TXT_TD5_SAV;?></td>
	    </tr>
	    </thead>
	    <tbody>
	    <?php /** @noinspection PhpUndefinedVariableInspection */
	    foreach($rdv as $k => $v): ?>
	        <tr>
	            <td><?php echo $v['idUser']; ?></td>
	            <td><?php echo $v['date']; ?></td>
	            <td><?php echo $v['contenu']; ?></td>
	            <td><a href="chat/<?php echo $v["id"];?>"><img class="mail" src="public/images/mail.png" data-alt-src="public/images/mail2.png"></a></td>
                <td class="valider"><a href="adminsav/archive/<?php echo $v['id']?>/<?php echo $v['idUser']?>"><img class="valider" src="public/images/valider.png" data-alt-src="public/images/valider1.png"></a></td>
                    </td>
	        </tr>
	    <?php endforeach ?>
	    </tbody>
	    </table>

    	<h1> <?php echo TXT_TITRE2_SAV;?> </h1>

	    <table class="table">
	    <thead>
	    <tr>
	        <td><?php echo TXT_TD1_SAV;?></td>
	        <td><?php echo TXT_TD2_SAV;?></td>
	        <td><?php echo TXT_TD3_SAV;?></td>
	        <td><?php echo TXT_TD4_SAV;?></td>
	        <td><?php echo TXT_TD5_SAV;?></td>
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

    	<h1> <?php echo TXT_TITRE3_SAV;?> </h1>

	    <table class="table">
	    <thead>
	    <tr>
	        <td><?php echo TXT_TD1_SAV;?></td>
	        <td><?php echo TXT_TD2_SAV;?></td>
	        <td><?php echo TXT_TD3_SAV;?></td>
	        <td><?php echo TXT_TD4_SAV;?></td>
	        <td><?php echo TXT_TD5_SAV;?></td>
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
	            <td class="valider"><a href="adminsav/archive/<?php echo $v['id'].'/'.$v['idUser']?>"><center><img class="valider" src="public/images/valider.png" data-alt-src="public/images/valider1.png"></center></a></td>
	        </tr>
	    <?php endforeach ?>
	    </tbody>
	    </table>

	</div>
</body>
</html>

