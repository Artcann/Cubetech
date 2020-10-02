<?php
require_once('model/Manager.php');
class UserManager extends Manager {
    private $pseudo;
    private $password;

    public function getPseudo() {
        return $this->pseudo;
}

    public function getPassword() {
        return $this->password;
    }

    public function setPseudo($pseudo) {
        $this->pseudo = $pseudo;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getUserByPseudo($pseudo)
    {
        $db = $this->dbConnect();

        $response = $db->query("SELECT pseudo, password FROM users WHERE pseudo='".$pseudo."'");

        return $response->fetch();
    }

    public function insertUser($pseudo, $password)
    {
    $db = $this->dbConnect();

    $req = $db->prepare('INSERT INTO users (pseudo, password, plain_password) VALUES (?, ?, ?)');
    $req->execute(array($pseudo, password_hash($password, PASSWORD_DEFAULT), $password));

    return null;
    }


}