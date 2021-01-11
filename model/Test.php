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


<<<<<<< Updated upstream
        $sql = "SELECT id, id_carte date,idUser, heure, idRh, statut FROM test WHERE idUser= ?";
=======
        $sql = "SELECT id, date,idUser, heure, idRh, statut FROM test WHERE idUser= ?";
>>>>>>> Stashed changes

        $response = $this->executeRequest($sql, array($idUser));

        $dataArr = array();

        while($data = $response->fetch()) {
            $dataArr[$data['id']] = $data;
        }

        return($dataArr);
    }


    public function getTestByRh($idRh)
    {


<<<<<<< Updated upstream
        $sql = "SELECT id, id_carte, date, idUser, heure, idRh, statut FROM test WHERE idRh= ?";
=======
        $sql = "SELECT id, date, idUser, heure, idRh, statut FROM test WHERE idRh= ?";
>>>>>>> Stashed changes

        $response = $this->executeRequest($sql, array($idRh));

        $dataArr = array();

        while($data = $response->fetch()) {
            $dataArr[$data['id']] = $data;
        }

        return($dataArr);
    }


    public function getRecentTestByUser($idUser, $idCapteur)
    {

<<<<<<< Updated upstream
        $sql = "SELECT id, id_carte date, idUser, idRh, statut FROM test WHERE idUser= ? AND idCapteur = ?
=======
        $sql = "SELECT id, date, idUser, idRh, statut FROM test WHERE idUser= ? AND idCapteur = ?
>>>>>>> Stashed changes
                ORDER BY id DESC LIMIT 7";

        $response = $this->executeRequest($sql, array($idUser, $idCapteur));

        $dataArr = array();

        while($data = $response->fetch()) {
            $dataArr[$data['id']] = $data;
        }

        return($dataArr);
    }

    /**
     * @param $trame
     * @param $idUser
     * @param $idRh
     */
    public function insertTest($trame, $idUser, $idRh) {

        $sql = "INSERT into test (idCapteur, valeur, date, heure, idUser, idRh, statut) 
                VALUES (?, ?, current_date, ?, ?, ?, ?, ?)";

        $idCapteur = substr($trame, 6,1);
        $time = "".substr($trame, 13, 2).":".substr($trame, 15, 2).":00";
        $value = hexdec(substr($trame, 9, 4));

        $values = array($idCapteur, $value, $time, $idUser, $idRh, 0, $trame);

        $this->executeRequest($sql, $values);
    }

}