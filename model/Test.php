<?php
require_once("Framework/Model.php");


/**
 * Class Test
 */
class Test extends Model
{
    /**
     * @param $idUser
     * @return array
     */
    public function getTestByUser($idUser)
    {


        $sql = "SELECT id, date,idUser, heure, idRh, statut FROM test WHERE idUser= ?";

        $response = $this->executeRequest($sql, array($idUser));

        $dataArr = array();

        while($data = $response->fetch()) {
            $dataArr[$data['id']] = $data;
        }

        return($dataArr);
    }


    public function getTestByRh($idRh)
    {


        $sql = "SELECT id, date, idUser, heure, idRh, statut FROM test WHERE idRh= ?";

        $response = $this->executeRequest($sql, array($idRh));

        $dataArr = array();

        while($data = $response->fetch()) {
            $dataArr[$data['id']] = $data;
        }

        return($dataArr);
    }


/*     public function getRecentTestByUser($idUser, $idCapteur)
    {

        $sql = "SELECT id, idCapteur, valeur, date, idUser, idRh, statut FROM test WHERE idUser= ? AND idCapteur = ?
                ORDER BY id DESC LIMIT 7";

        $response = $this->executeRequest($sql, array($idUser, $idCapteur));

        $dataArr = array();

        while($data = $response->fetch()) {
            $dataArr[$data['id']] = $data;
        }

        return($dataArr);
    } */

    /**
     * @param $trame
     * @param $idUser
     * @param $idRh
     */
    public function insertTest($trame, $idUser, $idRh) {

        $sql = "INSERT into test (idCapteur, valeur, date, heure, idUser, idRh, statut, trame) 
                VALUES (?, ?, current_date, ?, ?, ?, ?, ?)";

        $idCapteur = substr($trame, 6,1);
        $time = "".substr($trame, 13, 2).":".substr($trame, 15, 2).":00";
        $value = hexdec(substr($trame, 9, 4));

        $values = array($idCapteur, $value, $time, $idUser, $idRh, 0, $trame);

        $this->executeRequest($sql, $values);
    }

}