<?php

$this->title = "Acceuil Adminhome";
$this->style = "public/css/adminHome.css";

?>



<div class="container">
    <div class="row-1">
        <H1><?php echo TXT_TITRE1_BACK . ' ' . $this->sanitize($prenom) . ' ' . TXT_TITRE2_BACK ;?></H1>
    </div>
    <div class="row-2">
        <div class="row-2-col-1">
            <h3><?php echo TXT_TEXT1_BACK; ?></h3>
            <a class=button href="adminuser"><?php echo TXT_BT1_BACK; ?></a>
            <a class=button href="adminhome/register"><?php echo TXT_BT2_BACK; ?></a>
            <h3><?php echo TXT_TEXT2_BACK; ?></h3>
            <a class=button href="adminsav"><?php echo TXT_BT3_BACK; ?></a>
            <h3><?php echo 'Gestion des RDV'; ?></h3>
            <a class="button" href="rhtest"><?php echo 'Gérer les rendez-vous'; ?></a>
            <a class="button" href="rhtest/ajout"><?php echo 'Ajouter un rendez-vous'; ?></a>
        </div>
        <div class="row-2-col-2">
            <h3><?php echo TXT_TEXT3_BACK; ?></h3>
            <a class=button href="admincard"><?php echo TXT_BT4_BACK; ?></a>
            <a class=button href="admincard/create"><?php echo TXT_BT5_BACK; ?></a>
            <h3><?php echo TXT_TEXT4_BACK; ?></h3>
            <a class="button" href="adminfaq"><?php echo TXT_BT6_BACK; ?></a>
            <h3><?php echo TXT_TEXT5_BACK; ?></h3>
            <a class="button" href="admincgu"><?php echo TXT_BT7_BACK; ?></a>
        </div>
    </div>
    <div class="row-3">
        <a class="button" href="home/disconnect"><?php echo TXT_BT8_BACK; ?></a>
    </div>


</div>
