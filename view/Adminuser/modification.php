<?php
$this->title = "Modification";
$this->style = "public/css/index.css";
$this->script = "public/js/register.js";
?>

<h1>Modification</h1>

<h3><?php echo TXT_TITRE2_RE;?></h3>
<div class="form-container">
    <form action="adminuser/modifyDone/" name="register" method="post">
      <input type="hidden" id="idUser" name="idUser" value="<?php echo $idUser?>">
        <div>
            <label for="nom"><?php echo TXT_TD1_RE;?></label><input type="text" name="nom" id="nom" >
        </div>
        <div>
            <label for="prenom"><?php echo TXT_TD2_RE;?></label><input type="text" name="prenom" id="prenom" >
        </div>
        <div>
            <label for="date"><?php echo TXT_TD3_RE;?></label><input type="date" name="date" id="date" >
        </div>
        <div>
            <label for="statut"><?php echo TXT_SELECT_RE;?></label>
            <select name="statut" id="statut">
                <option value=""><?php echo TXT_SELECT1_RE;?></option>
                <option value="1"><?php echo TXT_SELECT2_RE;?></option>
                <option value="2"><?php echo TXT_SELECT3_RE;?></option>
                <option value="3"><?php echo TXT_SELECT4_RE;?></option>
            </select>
        </div>
    <div>
            <label for="grade"><?php echo TXT_TD4_RE;?></label><input type="text" name="grade" id="grade">
        </div>
        <div>
            <label for="nationalite"><?php echo TXT_TD5_RE;?></label><input type="text" name="nationalite" id="nationalite">
        </div>
        <div>
            <label for="caserne"><?php echo TXT_TD6_RE;?></label><input type="text" name="caserne" id="caserne">
        </div>
        <div>
            <label for="corps"><?php echo TXT_TD7_RE;?></label><input type="text" name="corps" id="corps">
        </div>
        <div>
            <label for="matricule"><?php echo TXT_TD8_RE;?></label><input type="text" name="matricule" id="matricule">
        </div>
        <div>
            <label for="mail"><?php echo TXT_TD9_RE;?></label><input type="text" name="mail" id="mail">
        </div>
        <div>
            <label for="password"><?php echo TXT_TD10_RE;?></label><input type="password" name="password" id="password" >
        </div>
        <div>
            <label for="password2"><?php echo TXT_TD11_RE;?></label><input type="password" name="password2" id="password2" >
        </div>
        <div onclick="return validateForm();">
            <label for="submit"><?php echo TXT_BT1_RE;?></label><input type="submit">
        </div>
    </div>
</form>
