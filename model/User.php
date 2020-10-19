<?php
require_once("model/Manager.php");

class User extends Manager
{

    public function getUserByPseudo($pseudo): array
    {
        $sql = "SELECT pseudo, password FROM users WHERE pseudo='".$pseudo."'";

        return $this->executeSelect($sql, array($pseudo));
    }

    public function insertUser($pseudo, $password)
    {
        $sql = 'INSERT INTO users (pseudo, password, plain_password) VALUES (?, ?, ?)';

        $this->executeInsert($sql, array($pseudo, password_hash($password, PASSWORD_DEFAULT), $password));



        return null;
    }
}