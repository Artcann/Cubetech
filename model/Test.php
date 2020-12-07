<?php
require_once("Framework/Model.php");


class Test extends Model
{
    public function getTestByUser($idUser)
    {

        $sql = "SELECT id, type, idCapteur, valeur, date, idUser, idRh, statut FROM test WHERE idUser='".$idUser."'";

        $response = $this->executeRequest($sql, array($idUser));

        $dataArr = array();

        while($data = $response->fetch()) {
            $dataArr[$data['id']] = $data;
        }

        return($dataArr);
    }
    


}