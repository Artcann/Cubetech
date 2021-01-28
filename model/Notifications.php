<?php
require_once 'Framework/Model.php';

class Notifications extends Model
{


    public function getNotif($idUser)
    {

        $sql='SELECT id,contenu,date FROM app2021_notification WHERE idUser='.$idUser;
        $response=$this->executeRequest($sql);
        $dataArr= array();
        while ($data= $response->fetch()){
            $dataArr[$data['id']]=$data;
        }
        return $dataArr;
    }
}
