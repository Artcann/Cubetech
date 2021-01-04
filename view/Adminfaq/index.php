<?php

$this->title = "Acceuil Admin Faq";
$this->style = "public/css/adminFaq.css";

foreach($faq as $k => $v) {
    echo "<p>";
    echo $v['titre'];
    echo $v['contenu'];
    echo '</br> </p>';
}

?>