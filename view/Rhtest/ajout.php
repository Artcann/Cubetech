<?php

$this->title = "Ajout test | Cubetech";
$this->style = "public/css/ajoutTest.css";
$this->script = "";
?>

<div class="form-container">
    <form action="rhtest/ajoutTest" method="post">
        <label for=""><?php echo 'date' ;?></label></br>
        <textarea class="textarea" id='title' name="date"></textarea></br>
        
        <label for=""><?php echo 'heure' ;?></label></br>
        <textarea class="textarea" id='content' name="heure"></textarea></br>

        <label for=""><?php echo 'idRh' ;?></label></br>
        <textarea class="textarea" id='content' name="idRh"></textarea></br>

        <label for=""><?php echo 'idUser' ;?></label></br>
        <textarea class="textarea" id='content' name="idUser"></textarea></br>
        
        <input id='valid' type='submit' value=<?php echo TXT_BT5_FAQ ;?>>
    </form>
</div>
