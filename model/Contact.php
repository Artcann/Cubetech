<?php
require_once "Framework/Model.php";

class Contact extends Model
{
    public function insertMessage($idUser,$contenu,$type,$date,$statut,$destinataire)
    {
        $sql= "INSERT INTO app2021_sav (idUser,contenu,type,date,statut,destinataire) VALUES (?,?,?,?,?,?)";
        $values= array($idUser,$contenu,$type,$date,$statut,$destinataire);

        $this->executeRequest($sql,$values);

    }
    public function getType()
    {
        $sql="SELECT id,type FROM app2021_sav_type";
        $response=$this->executeRequest($sql);
        $dataArr = array();

        while($data = $response->fetch()) {
            $dataArr[$data['id']] = $data;
        }
        return $dataArr;
    }
}
