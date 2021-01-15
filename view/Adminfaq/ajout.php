<?php

$this->title = "Ajout Admin Faq";
$this->style = "public/css/adminFaq.css";
$this->script = "public/js/adminFaq.js";
?>

<div id="container">
    <form action="adminfaq/ajoutpost" method="post">
        <label for="title"><?php echo TXT_TEXT3_FAQ ;?></label></br>
        <textarea class="textarea" id='title' name="title"></textarea></br>
        
        <label for="content"><?php echo TXT_TEXT4_FAQ ;?></label></br>
        <textarea class="textarea" id='content' name="content"></textarea></br>
        
        <input id='valid' type='submit' value=<?php echo TXT_BT5_FAQ ;?>>
    </form>
</div>