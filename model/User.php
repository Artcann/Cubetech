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

        $sql = "SELECT id, login, password, statut, prenom, nom, matricule, grade, naissance, nationalite, caserne, corps, mail FROM app2021_user WHERE login='".$login."'";

        return $this->executeRequest($sql, array($login))->fetch();
    }

    /**
     * @return array
     */
    public function getAllUsers() {
        $sql = "SELECT id, login, statut, prenom, nom FROM app2021_user";

        $response = $this->executeRequest($sql);

        $dataArr = array();

        while($data = $response->fetch()) {
            $dataArr[$data['id']] = $data;
        }

        return $dataArr;
    }

    public function researchUsers($nom, $prenom, $naissance, $grade, $caserne, $nationalite, $corps, $statut, $matricule) {

        $params = func_get_args();

        $formated = array();

        foreach($params as $param) {
            if($param != '') {
                $param = "%".$param."%";
            }
            array_push($formated, $param);
        }


        
        $sql = "SELECT user.id AS id, user.nom, prenom, login, mail, naissance, nationalite,
        grade, corps, caserne, matricule, caserne.ville, statut.nom AS statutName, corps.type
        FROM user
        LEFT JOIN caserne
        ON user.caserne = caserne.id
        LEFT JOIN statut
        ON user.statut = statut.id
        LEFT JOIN corps
        ON user.corps = corps.id
        WHERE (user.nom LIKE ? OR prenom LIKE ? OR naissance = ? OR grade = ? OR caserne = ? OR nationalite LIKE ?
        OR corps = ? OR statut = ? OR matricule LIKE ?)";

        $val = array($nom, $prenom, $naissance);

        echo $this->executeRequest($sql, $formated)->debugDumpParams();

        $response = $this->executeRequest($sql, $formated);
        
        $dataArr = array();
        while($data = $response->fetch()) {
            array_push($dataArr,$data);
        }

        #return $dataArr;
    }

    public function getUserById($id)
    {

        $sql = "SELECT id, login, password, statut, prenom, nom, matricule, grade, naissance, nationalite, caserne, corps, mail
        FROM app2021_user WHERE id='".$id."'";

        return $this->executeRequest($sql, array($id))->fetch();
    }



    /**
     * @param $values
     * @return null |null
     */
    public function insertUser($values)
    {


        $sql = 'INSERT INTO `app2021_user` (`nom`, `prenom`, `naissance`, `grade`,
                `nationalite`, `caserne`, `corps`, `statut`, `matricule`, `mail`, `password`,`login`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $this->executeRequest($sql, $values);



        return null;
    }

    /**
     * @param $id
     */
    public function deleteUserById($id) {
        $sql = "DELETE FROM app2021_user WHERE id='".$id."'";

        $this->executeRequest($sql);

    }

    public function modifyUserById($values){
      $sql = 'UPDATE app2021_user SET id=? , login=?, password=?, statut=?,
              prenom=?, nom=?, matricule=?, grade=?,naissance=?, nationalite=?, caserne=?, corps=?, mail=?,password=?
             WHERE login=?';
      $this->executeRequest($sql, $values);

    }

    public function modifyPassword($id, $password) {
        $sql = "UPDATE app2021_user SET password= ? WHERE id= ?";

        $this->executeRequest($sql, array($password, $id));
    }
}
