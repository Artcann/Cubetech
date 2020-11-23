<?php
require_once("Framework/Model.php");

class User extends Model
{

    public function getUserByLogin($login)
    {
        $sql = "SELECT login, password, statut, prenom, nom FROM user WHERE login='".$login."'";

        return $this->executeSelect($sql, array($login))->fetch();
    }

    public function getAllUsers() {
        $sql = "SELECT id, login, statut, prenom, nom FROM user";

        $response = $this->executeSelect($sql);

        $dataArr = array();

        while($data = $response->fetch()) {
            $dataArr[$data['id']] = $data;
        }

        return $dataArr;
    }

    public function insertUser($values)
    {


        $sql = 'INSERT INTO `user` (`nom`, `prenom`, `naissance`, `grade`, 
                `nationalite`, `caserne`, `corps`, `statut`, `matricule`, `mail`, `password`, `login`) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';

        $this->executeInsert($sql, $values);



        return null;
    }
}