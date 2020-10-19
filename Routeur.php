<?php
require_once 'controller/ControllerLogin.php';

class Routeur
{
    private $ctrlLogin;

    public function __construct()
    {
        $this->ctrlLogin = new ControllerLogin();
    }

    public function routerRequete() {
        try {
                if (isset($_GET['action'])) {
                    if ($_GET['action'] == "login") {
                        $this->ctrlLogin->login();
                    } elseif ($_GET['action'] == "login-verification") {
                        $pseudo = $_POST['pseudo'];
                        $password = $_POST['password'];

                        $this->ctrlLogin->loginVerification($pseudo, $password);
                    } elseif ($_GET['action'] == "register") {
                        $user = new User();
                        $pseudo = "test";
                        $password = "test";

                        echo 1;

                        $user->insertUser($pseudo, $password);
                    }
                } else {
                $this->ctrlLogin->login();
            }
        } catch (Exception $e) {
            echo 'Erreur : '.$e->getMessage();
        }
    }

    private function error($msgError) {

    }
}