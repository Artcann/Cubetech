<?php
$this->title = "Creation Cartes";
$this->style = "public/css/index.css";
$this->script = "public/js/register.js";

?>

<h1><?php echo TXT_TITRE1_CAR2;?></h1>
<div class="form-container">
    <form action="admincard/createpost" method="post">
        <label for="statut"><?php echo TXT_TEXT1_CAR2;?></label>
        <select name="statut" id="statut">
            <option value=""><?php echo TXT_SELECT_CAR2;?></option>
            <option value="1"><?php echo TXT_SELECT1_CAR2;?></option>
            <option value="2"><?php echo TXT_SELECT2_CAR2;?></option>
            <option value="3"><?php echo TXT_SELECT3_CAR2;?></option>
        </select><br>
        <label for="caserne"><?php echo TXT_TEXT2_CAR2; ?></label>
        <select name="caserne">
            <option value="">--Choisissez une option--</option>
            <?php foreach($data as $k => $v): ?>
            <option value="<?php echo $v['id']?>"><?php echo $v['ville'] . " | " . $v['addresse']?></option>
            <?php endforeach ?>
        </select><br>
        <label for="date"><?php echo TXT_TEXT3_CAR2;?></label>
        <input type="date" name="date" id="date">
        <div onclick="return validateForm();">
            <input type="submit" id="submit-button">
        </div>
    </form>
</div>