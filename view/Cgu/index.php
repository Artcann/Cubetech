<?php

$this->title = "CGU";

$this->style = "public/css/cgu.css";

#print_r($data);

?>

<?php include_once "view/header.html"; ?>
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

<?php include_once "view/footer.html"; ?>
