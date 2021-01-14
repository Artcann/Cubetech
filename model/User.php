<?php
require_once("Framework/Model.php");

/**
 * Class User
 */
class User extends Model
{

    /**
     * @param $login
     * @return mixed
     */
    public function getUserByLogin($login)
    {

        $sql = "SELECT id, login, password, statut, prenom, nom, matricule, grade, naissance, nationalite, caserne, corps, mail FROM user WHERE login='".$login."'";

        return $this->executeRequest($sql, array($login))->fetch();
    }

    /**
     * @return array
     */
    public function getAllUsers() {
        $sql = "SELECT id, login, statut, prenom, nom FROM user";

        $response = $this->executeRequest($sql);

        $dataArr = array();

        while($data = $response->fetch()) {
            $dataArr[$data['id']] = $data;
        }

        return $dataArr;
    }

    public function researchUsers($nom, $prenom, $naissance, $grade, $caserne, $nationalite, $corps, $statut, $matricule) {

        $params = func_get_args();

        #print_r($params);

        $formated = array();

        foreach($params as $param) {
            if($param != '') {
                $param = "%".$param."%";
            }
            array_push($formated, $param);
        }

        #print_r($formated);

/*         $id = "%".$id."%";
        $nom = "%".$nom."%";
        $prenom = "%".$prenom."%";
        $naissance = "%".$naissance."%"; */
        


        $sql = "SELECT id, nom, prenom, login, mail, naissance, nationalite, statut, grade, corps, caserne, matricule FROM user
        WHERE (nom LIKE ? OR prenom LIKE ? OR naissance = ? OR grade = ? OR caserne = ? OR nationalite LIKE ?
        OR corps = ? OR statut = ? OR matricule LIKE ?)";

        $val = array($nom, $prenom, $naissance);

        $response = $this->executeRequest($sql, $formated);
        #echo $response->debugDumpParams();
        $dataArr = array();
        while($data = $response->fetch()) {
            array_push($dataArr,$data);
        }

        #print_r($dataArr);

        return $dataArr;
    }

    public function getUserById($id)
    {

        $sql = "SELECT id, login, password, statut, prenom, nom, matricule, grade, naissance, nationalite, caserne, corps, mail 
        FROM user WHERE id='".$id."'";

        return $this->executeRequest($sql, array($id))->fetch();
    }



    /**
     * @param $values
     * @return null |null
     */
    public function insertUser($values)
    {


        $sql = 'INSERT INTO `user` (`nom`, `prenom`, `naissance`, `grade`, 
                `nationalite`, `caserne`, `corps`, `statut`, `matricule`, `mail`, `password`, `login`) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $this->executeRequest($sql, $values);



        return null;
    }

    /**
     * @param $id
     */
    public function deleteUserById($id) {
        $sql = "DELETE FROM user WHERE id='".$id."'";

        $this->executeRequest($sql);

    }

    public function modifyPassword($id, $password) {
        $sql = "UPDATE user SET password= ? WHERE id= ?";

        $this->executeRequest($sql, array($password, $id));
    }
}


