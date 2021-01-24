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

    public function getTestByUser($idUser){

        $sql = "SELECT id, date,idUser, heure, idRh, statut FROM app2021_test WHERE idUser= ?";

        $response = $this->executeRequest($sql, array($idUser));

        $dataArr = array();

        while($data = $response->fetch()) {
            $dataArr[$data['id']] = $data;
        }

        return($dataArr);
    }


    public function getTestById($id){

        $sql = "SELECT id, date,idUser, heure, idRh, statut FROM app2021_test WHERE id= ?";

        $val = array($id);

        return $this->executeRequest($sql, $val)->fetch();
    }


    public function getAllTests(){

        $sql = "SELECT app2021_test.id, date, idUser, heure, idRh, app2021_test.statut, app2021_user.nom, app2021_user.prenom, app2021_user.caserne 
                FROM app2021_test 
                INNER JOIN app2021_user on app2021_test.idUser = app2021_user.id 
                WHERE app2021_test.statut = 0 ORDER BY date 
               ";

        $response = $this->executeRequest($sql);

        $dataArr = array();

        while($data = $response->fetch()) {
            $dataArr[$data['id']] = $data;
        }

        return $dataArr;
    }


    public function delete($id){

        $sql = "DELETE FROM app2021_test WHERE id=?";

        $val = array($id);

        $this->executeRequest($sql, $val);
    }


    public function update($date, $heure, $idRh, $id){

        $sql = "UPDATE app2021_test SET date=?, heure=?, idRh =? WHERE id=?";

        $val = array($date, $heure, $idRh, $id);

        return $this->executeRequest($sql, $val);
    }


    public function addTest($date, $heure, $idRh, $idUser){

        $sql = "INSERT INTO app2021_test (date, heure, idRh, idUser) VALUES (?, ?, ?, ?)";

        $val = array($date, $heure, $idRh, $idUser);

        return $this->executeRequest($sql, $val);
    }



    public function getTestByRh($idRh){

        $sql = "SELECT id, date, idUser, heure, idRh, statut FROM app2021_test WHERE idRh= ?";

        $response = $this->executeRequest($sql, array($idRh));

        $dataArr = array();

        while($data = $response->fetch()) {
            $dataArr[$data['id']] = $data;
        }

        return($dataArr);
    }


/*     public function getRecentTestByUser($idUser, $idCapteur)
    {


        $sql = "SELECT id, date, idUser, idRh, statut FROM test WHERE idUser= ? AND idCapteur = ?
                ORDER BY id DESC LIMIT 7";

        $response = $this->executeRequest($sql, array($idUser, $idCapteur));

        $dataArr = array();

        while($data = $response->fetch()) {
            $dataArr[$data['id']] = $data;
        }

        return($dataArr);
    } */

  
    public function insertTest($trame, $idUser, $idRh){

        $sql = "INSERT into app2021_test (idCapteur, valeur, date, heure, idUser, idRh, statut) 
                VALUES (?, ?, current_date, ?, ?, ?, ?, ?)";

        $idCapteur = substr($trame, 6,1);
        $time = "".substr($trame, 13, 2).":".substr($trame, 15, 2).":00";
        $value = hexdec(substr($trame, 9, 4));

        $values = array($idCapteur, $value, $time, $idUser, $idRh, 0, $trame);

        $this->executeRequest($sql, $values);
    }

   

}





