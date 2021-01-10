<?php

$this->title = "Forum";

/*$this->style = "public/css/forum.css";*/


?>

<h2>Liste des catégories :</h2>
<?php


/*foreach ($data['totalDesc'] as $datum){
    echo '<p><strong>'.$datum['name'].'</strong>'.' ('.$datum['total_topics'].')</p>';
    echo '<p>'.$datum['description'].'</p><br>';
}*/

foreach ($data['totalDesc'] as $datum){
    echo '<p><strong><a href="forum/topic/'.$datum['category_id'].'">'.$datum['name'].'</strong>'.' ('.$datum['total_topics'].')</a></p>';
    echo '<p>'.$datum['description'].'</p><br>';
}


print_r($data['totalDesc'])
?>