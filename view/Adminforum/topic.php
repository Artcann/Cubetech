<?php

$this->title = "Forum Topic Administrateur | Cubetech";

$this->style = "public/css/forum.css";
$this->script = "public/js/forum.js"
?>
<br>
    <h2>Liste des topics :</h2>
<br><br>
<?php


/*foreach ($data['totalDesc'] as $datum){
    echo '<p><strong>'.$datum['name'].'</strong>'.' ('.$datum['total_topics'].')</p>';
    echo '<p>'.$datum['description'].'</p><br>';
}*/
/*foreach ($data['listTopics'] as $datum){
    echo '<strong><a href="forum/post/'.$datum['topic_id'].'">'.$datum['subject'].'</strong>'.' ('.$datum['total_topics'].')</a>';
    echo '<p>'.$datum['nom'].' '.$datum['prenom'].'</p><br>';
}


*/
/*print_r($data['listTopics']);*/

?>

<table class="table">
    <thead>
    <tr>
        <td>Sujet</td>
        <td>Auteur</td>
        <td>Nombre de réponses</td>
        <td>Créé le </td>
        <td>Supression</td>

    </tr>
    </thead>
    <tbody>
    <?php /** @noinspection PhpUndefinedVariableInspection */
    foreach($data['listTopics'] as $datum): ?>
        <tr <?php echo 'data-href="adminforum/post/' . $datum['topic_id'] . '".'?>>
            <td><?php echo '<a href="adminforum/post/'.$datum['topic_id'].'">'.$datum['subject'].'</a>'?></td>
            <td><?php echo $datum['nom'].' '.$datum['prenom'] ?></td>
            <td><?php echo $datum['total_topics'] ?></td>
            <td><?php echo $datum['created'] ?></td>
            <td><?php echo '<a onclick="return confirm(\'Êtes-vous sûr de vouloir supprimer ce sujet ?\')"
                    href="adminforum/deleteTopic/' . $datum['topic_id'] . '" class="button">Supprimer</a>' ?></td>

        </tr>
    <?php endforeach ?>
    </tbody>
</table>

<img class="open-button" src="public/images/plus.png" onclick="openForm()">


<div class="form-popup" id="myForm">
    <form action="adminforum/newTopic" class="form-container" method="post">
        <input type="hidden" id="category_id" name="category_id" value="<?php echo $data['refCat']?>">
        <h1>Nouveau sujet</h1>

        <label><b>Sujet</b></label>
        <input type="text" placeholder="Écrivez le sujet" name="subject" required>

        <!--<label for="msg"><b>Message</b></label>
        <textarea placeholder="Détaillez votre problème" name="message" required></textarea>-->

        <button type="submit" class="btn">Envoyer</button>
        <button type="button" class="btn cancel" onclick="closeForm()">Annuler</button>
    </form>
</div>


