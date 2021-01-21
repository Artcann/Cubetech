<?php
$this->title = "Contact | Cubetech";
$this->style = "public/css/contact.css";
?>

<form id="contact" action="contact" method="post">
    <div class="select-style">
    <select name="type">
        <option value="">--Choisissez une option--</option>
        <?php foreach($data as $k => $v): ?>
        <option value="<?php echo $v['id']?>"><?php echo $v['type']?></option>
        <?php endforeach ?>
    </select>
    </div>
    <label id="title" for="contenu"> Votre message:</label>
    <textarea id="contenu" name="message" placeholder="Votre message...">
    </textarea>
    <p>
    <input id="contactsubmit" type="submit" value="Valider">
    </p>
</form>

