<?php

$this->title = "Ajout de question FAQ | Cubetech";
$this->style = "public/css/adminFaq.css";
$this->script = "public/js/adminFaq.js";
?>

<div class="form-container">
    <form action="adminfaq/ajoutpost" method="post">
        <label for="title"><?php echo TXT_TEXT3_FAQ ;?></label></br>
        <textarea class="textarea-add" id='title' name="title"></textarea></br>
        
        <label for="content"><?php echo TXT_TEXT4_FAQ ;?></label></br>
        <textarea class="textarea-add" id='content' name="content"></textarea></br>
        
        <input id='valid' type='submit' value=<?php echo TXT_BT5_FAQ ;?>>
    </form>
</div>