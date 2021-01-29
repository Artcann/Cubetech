<?php

$this->title = "Modification de la FAQ | Cubetech";
$this->style = "public/css/adminFaq.css";
$this->script = "public/js/adminFaq.js";
?>

<div class="form-container">
    <form>
        <label for="title"><?php echo TXT_TEXT1_FAQ ;?></label></br>
        <textarea class="textarea-add" id='title'><?php echo $faq['titre']?></textarea></br>

        <label for="content"><?php echo TXT_TEXT2_FAQ ;?></label></br>
        <textarea class="textarea-add" id='content'><?php echo $faq['contenu'] ?></textarea></br>

        <input id='valid' type='button' value=<?php echo TXT_BT4_FAQ ;?>>
    </form>
</div>

