<?php

$this->title = "CGU | Cubetech";

$this->style = "public/css/cgu.css";


?>
<br/>


<h1 class="cgu" style="text-align: center">CGU</h1><br/>
<div class="cguscroll">

<?php
foreach ($data as $datum) {
    echo '<h2 class="cgu">'.$datum['titre'].'</h2>';
    echo '<p class="blockcgu">'.$datum['contenu'].'</p>';
    echo '<br/>';
}
?>
</div>
