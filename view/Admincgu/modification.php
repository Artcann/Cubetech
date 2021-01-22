<?php
$this->title = "Modification CGU | Cubetech";
$this->script = "public/js/adminFaq.js";
?>

<div class="form-container">
    <label for="title"><?php echo TXT_TEXT1_CGU; ?></label></br>
    <textarea class="textarea" id='title'><?php echo $cgu['titre']?></textarea></br>
    
    <label for="content"><?php echo TXT_TEXT2_CGU; ?></label></br>
    <textarea class="textarea" id='content'><?php echo $cgu['contenu'] ?></textarea></br>
    
    <input id='valid' type='button' value=<?php echo TXT_BT4_CGU; ?>>
</div>