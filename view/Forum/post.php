<?php

$this->title = "Forum | Post";

/*$this->style = "public/css/forum.css";*/

?>

    <h2>Liste des posts :</h2>
<?php


/*
foreach ($data['listPosts'] as $datum){
    echo '<p>'.$datum['subject'].'</strong>'.' ('.$datum['total_topics'].')</p>';
    echo '<p>'.$datum['nom'].' '.$datum['prenom'].'</p><br>';
}*/

print_r($data['listPosts']);
print_r($data['subject']);
?>