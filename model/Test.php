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

        $sql = "SELECT id, date,idUser, heure, idRh, statut FROM  test WHERE idUser= ?";

        $response = $this->executeRequest($sql, array($idUser));

        $dataArr = array();

        while($data = $response->fetch()) {
            $dataArr[$data['id']] = $data;
        }

        return($dataArr);
    }


    public function getTestById($id){

        $sql = "SELECT id, date,idUser, heure, idRh, statut FROM  test WHERE id= ?";

        $val = array($id);

        return $this->executeRequest($sql, $val)->fetch();
    }


    public function getAllTests(){

        $sql = "SELECT  test.id, date, idUser, heure, idRh,  test.statut, user.nom, user.prenom, user.caserne 
                FROM  test 
                INNER JOIN user on  test.idUser = user.id 
                WHERE  test.statut = 0 ORDER BY date 
               ";

        $response = $this->executeRequest($sql);

        $dataArr = array();

        while($data = $response->fetch()) {
            $dataArr[$data['id']] = $data;
        }

        return $dataArr;
    }


    public function delete($id){

        $sql = "DELETE FROM  test WHERE id=?";

        $val = array($id);

        $this->executeRequest($sql, $val);
    }


    public function update($date, $heure, $idRh, $id){

        $sql = "UPDATE  test SET date=?, heure=?, idRh =? WHERE id=?";

        $val = array($date, $heure, $idRh, $id);

        return $this->executeRequest($sql, $val);
    }


    public function addTest($date, $heure, $idRh, $idUser){

        $sql = "INSERT INTO  test (date, heure, idRh, idUser) VALUES (?, ?, ?, ?)";

        $val = array($date, $heure, $idRh, $idUser);

        return $this->executeRequest($sql, $val);
    }



    public function getTestByRh($idRh){

        $sql = "SELECT id, date, idUser, heure, idRh, statut FROM  test WHERE idRh= ?";

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

        $sql = "INSERT into  test (idCapteur, valeur, date, heure, idUser, idRh, statut) 
                VALUES (?, ?, current_date, ?, ?, ?, ?, ?)";

        $idCapteur = substr($trame, 6,1);
        $time = "".substr($trame, 13, 2).":".substr($trame, 15, 2).":00";
        $value = hexdec(substr($trame, 9, 4));

        $values = array($idCapteur, $value, $time, $idUser, $idRh, 0, $trame);

        $this->executeRequest($sql, $values);
    }

   

}





