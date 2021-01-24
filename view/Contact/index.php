<?php
$this->title = "Contact | Cubetech";
$this->style = "public/css/contact.css";
$this->script ="public/js/contact.js";
?>

<form id="contact" name="contact" onsubmit="return(Verifmessage())" action="contact/message" method="post">
    <div class="select-style">
    <select name="type">
        <option value=""><?php echo TXT_SELECT_CONTACT;?></option>
        <option value="1"><?php echo TXT_SELECT1_CONTACT;?></option>
        <option value="2"><?php echo TXT_SELECT2_CONTACT;?></option>
        <option value="3"><?php echo TXT_SELECT3_CONTACT;?></option>

    </select>
    </div>
    <label id="title" for="contenu"> <?php echo TXT_TEXT_CONTACT;?></label>
    <textarea id="contenu" name="message" placeholder="Votre message...">
    </textarea>
    <p>
    <input id="contactsubmit" type="submit" value=<?php echo TXT_BT1_CONTACT?>>
    </p>
</form>

