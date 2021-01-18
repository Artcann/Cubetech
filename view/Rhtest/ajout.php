<?php

$this->title = "Ajout test";
$this->style = "";
$this->script = "";
?>

<div id="container">
    <form action="rhtest/ajoutTest" method="post">
        <label for=""><?php echo TXT_TD1_TEST2;?></label></br>
        <textarea class="textarea" id='title' name="date"></textarea></br>
        
        <label for=""><?php echo TXT_TD2_TEST2 ;?></label></br>
        <textarea class="textarea" id='content' name="heure"></textarea></br>

        <label for=""><?php echo TXT_TD3_TEST2 ;?></label></br>
        <textarea class="textarea" id='content' name="idRh"></textarea></br>

        <label for=""><?php echo TXT_TD4_TEST2 ;?></label></br>
        <textarea class="textarea" id='content' name="idUser"></textarea></br>
        
        <input id='valid' type='submit' value=<?php echo TXT_BT5_FAQ ;?>>
    </form>
</div>
