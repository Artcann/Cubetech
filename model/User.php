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

        $sql = "SELECT login, password, statut, prenom, nom, matricule, grade, naissance, nationalite, caserne, corps, mail FROM user WHERE login='".$login."'";

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