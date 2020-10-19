<?php
require_once("model/Manager.php");

class User extends Manager
{
    public function getUserByPseudo($pseudo): array
    {
        $sql = "SELECT pseudo, password FROM users WHERE pseudo='".$pseudo."'";

        $users = $this->executeRequest($sql, array($pseudo));
        print_r($users);
        return $users;
    }

    public function getUserById($id): array
    {
        $sql = "SELECT pseudo, password FROM users WHERE pseudo='".$id."'";

        $user = $this->executeRequest($sql, array($id));
        return $user;
    }

    public function insertUser($pseudo, $password)
    {
        $sql = 'INSERT INTO users (pseudo, password, plain_password) VALUES (?, ?, ?)';

        $this->executeRequest($sql, array($pseudo, password_hash($password, PASSWORD_DEFAULT), $password));



        return null;
    }
}