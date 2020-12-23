<?php
require_once("Framework/Model.php");


class Sav extends Model
{

    public function getAllSav() {
        $sql = "SELECT id, idUser, contenu, type, date, statut, destinataire FROM sav";

        $response = $this->executeRequest($sql);

        $dataArr = array();

        while($data = $response->fetch()) {
            $dataArr[$data['id']] = $data;
        }

        return $dataArr;
    }
   
}

?>


