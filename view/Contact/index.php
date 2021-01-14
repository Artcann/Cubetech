<?php
$this->style = "public/css/contact.css";
?>


<form id="contact" action="contact" method="post">
    <div class="select-style">
    <select name="type">
        <option value=""><?php echo TXT_SELECT_CONTACT;?></option>
        <option value="rendez-vous"><?php echo TXT_SELECT1_CONTACT;?></option>
        <option value="Bug"><?php echo TXT_SELECT2_CONTACT;?></option>
        <option value="suggestion"><?php echo TXT_SELECT3_CONTACT;?></option>
    </select>
    </div>
    <label id="title" for="contenu"><?php echo TXT_TEXT_CONTACT;?></label>
    <textarea id="contenu" name="message" placeholder="Votre message...">
    </textarea>
    <input type="submit" value="<?php echo TXT_BT1_CONTACT;?>">
</form>


