<?php

$this->title = "Forum | Topic";

$this->style = "public/css/forum.css";
$this->script = "public/js/forum.js"
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
        <td>Sujet</td>
        <td>Auteur</td>
        <td>Nombre de réponses</td>
        <td>Créé le </td>

    </tr>
    </thead>
    <tbody>
    <?php /** @noinspection PhpUndefinedVariableInspection */
    foreach($data['listTopics'] as $datum): ?>
        <tr <?php echo 'data-href="forum/post/' . $datum['topic_id'] . '".'?>>
            <td><?php echo '<a href="forum/post/'.$datum['topic_id'].'">'.$datum['subject'].'</a>'?></td>
            <td><?php echo $datum['nom'].' '.$datum['prenom'] ?></td>
            <td><?php echo $datum['total_topics'] ?></td>
            <td><?php echo $datum['created'] ?></td>

        </tr>
    <?php endforeach ?>
    </tbody>
</table>