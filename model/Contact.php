<?php
require_once "Framework/Model.php";
require("controller/ControllerContact.php");

class Contact extends Model
{
    private function getDestinataire()
    {

    }
    private function insertMessage($idUser,$contenu,$type,$date,$status,$destinataire)
    {
        $sql= "INSERT INTO `sav` VALUES (?,?,?,?,?,?)";

        $this->executeRequest($sql);

    }
    public function getType()
    {
        $sql="SELECT id,type FROM sav_type";
        $response=$this->executeRequest($sql);
        $dataArr = array();

        while($data = $response->fetch()) {
            $dataArr[$data['id']] = $data;
        }
        return $dataArr;
    }
}
