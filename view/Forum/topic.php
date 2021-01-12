<?php

$this->title = "Forum | Topic";

/*$this->style = "public/css/forum.css";*/

?>

    <h2>Liste des topics :</h2>
<?php


/*foreach ($data['totalDesc'] as $datum){
    echo '<p><strong>'.$datum['name'].'</strong>'.' ('.$datum['total_topics'].')</p>';
    echo '<p>'.$datum['description'].'</p><br>';
}*/
foreach ($data['listTopics'] as $datum){
    echo '<strong><a href="forum/post/'.$datum['topic_id'].'">'.$datum['subject'].'</strong>'.' ('.$datum['total_topics'].')</a>';
    echo '<p>'.$datum['nom'].' '.$datum['prenom'].'</p><br>';
}


print_r($data['listTopics']);
?>

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
	            <td class="valider"><a href="adminsav/archive/<?php echo $v['id']?>"><center><img class="valider" src="public/images/valider.png" data-alt-src="public/images/valider1.png"></center></a></td>
	        </tr>
	    <?php endforeach ?>
	    </tbody>
	    </table>
