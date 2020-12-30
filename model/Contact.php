<?php
require_once "Framework/Model.php";
require("Controller/ControllerContact.php");

class Contact extends Model
{
    private function insertMessage($idUser,$contenu,$type,$date,$status,$destinataire)
    {
        $sql= "INSERT INTO `sav` VALUES ($idUser,$contenu,$type,$date,$status,$destinataire)";

        $this->executeInsert($sql);


        return null;
    }
}
