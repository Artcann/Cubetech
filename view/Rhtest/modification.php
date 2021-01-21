<?php

$this->title = "Accueil Changement test";
$this->style = "public/css/ajoutTest.css"
?>

<div class="form-container">
    <form action="rhtest/modification" method="post">
        <label for="date"><?php echo "Date" ;?></label></br>
        <textarea class="textarea" id='title'><?php echo $test['date']?></textarea></br>
        
        <label for="heure"><?php echo "Heure" ;?></label></br>
        <textarea class="textarea" id='content'><?php echo $test['heure'] ?></textarea></br>

        <label for="idRh"><?php echo "idRh" ;?></label></br>
        <textarea class="textarea" id='content'><?php echo $test['idRh'] ?></textarea></br>
        
        <input id='valid' type='button' value=<?php echo TXT_BT4_FAQ ;?>>
    </form>
</div>


