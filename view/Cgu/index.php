<?php

$this->title = "CGU";
$this->style = "public/css/index.css";


#print_r($data[1]['contenu']);

foreach ($data as $datum) {
    echo '<h2>'.$datum['titre'].'</h2>';
    echo '<p>'.$datum['contenu'].'</p>';


}

?>