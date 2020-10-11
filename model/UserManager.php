<?php
require_once("model/Manager.php");

class UserManager extends Manager
{
    public function getUserByPseudo($pseudo): array
    {
        $db = $this->dbConnect();

        $response = $db->query("SELECT pseudo, password FROM users WHERE pseudo='".$pseudo."'");

        return $response->fetch();
    }

    public function insertUser($pseudo, $password)
    {
        $db = $this->dbConnect();

        $req = $db->prepare('INSERT INTO users (pseudo, password, plain_password) VALUES (?, ?, ?)');
        $req->execute(array($_POST['pseudo'], password_hash($_POST['password'], PASSWORD_DEFAULT), $_POST['password']));

        return null;
    }
}