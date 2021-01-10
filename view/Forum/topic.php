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