<?php
require_once("Framework/Model.php");

class User extends Model
{

    public function getUserByLogin($login)
    {
        $sql = "SELECT login, password, statut, prenom, nom, matricule, grade, naissance, nationalite, caserne, corps, mail FROM user WHERE login='".$login."'";

        return $this->executeSelect($sql, array($login));
    }

    public function insertUser($values)
    {


        $sql = 'INSERT INTO `user` (`nom`, `prenom`, `naissance`, `grade`, 
                `nationalite`, `caserne`, `corps`, `statut`, `matricule`, `mail`, `password`, `login`) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';

        $this->executeInsert($sql, $values);
        return null;
    }

    public function UserBytest()
    {
        $sql = 
    }
}