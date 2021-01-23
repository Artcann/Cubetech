<?php

$this->title = "Accueil Changement test | Cubetech";
$this->style = "public/css/ajoutTest.css"
?>

<div class="form-container">
    <form action="rhtest/modification" method="post">
        <label for="date"><?php echo "Date" ;?></label></br>
        <textarea name = "date" class="textarea" id='title'><?php echo $test['date']?></textarea></br>
        
        <label for="heure"><?php echo "Heure" ;?></label></br>
        <textarea name = "heure" class="textarea" id='content'><?php echo $test['heure'] ?></textarea></br>

        <label for="idRh"><?php echo "idRh" ;?></label></br>
        <textarea name = "idRh" class="textarea" id='content'><?php echo $test['idRh'] ?></textarea></br>

        
        <input type="hidden" id="id" name="id" value="<?php echo $test['id']?>">
        
        <input id='valid' type='submit' value=<?php echo TXT_BT4_FAQ ;?>>
    </form>
</div>


