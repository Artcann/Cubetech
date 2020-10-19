<?php
require_once 'controller/ControllerLogin.php';
require_once  'controller/ControllerRegister.php';
require_once  'controller/ControllerHome.php';

class Routeur
{
    private $ctrlLogin;
    private $ctrlRegister;
    private $ctrlHome;

    public function __construct()
    {
        $this->ctrlLogin = new ControllerLogin();
        $this->ctrlRegister = new ControllerRegister();
        $this->ctrlHome = new ControllerHome();
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
                        $this->ctrlRegister->register();

                    } elseif ($_GET['action'] == 'register-verification') {
                        $pseudo = $_POST['pseudo'];
                        $password = $_POST['password'];

                        $this->ctrlRegister->registerVerification($pseudo, $password);

                    } elseif ($_GET['action'] == 'home') {
                        $this->ctrlLogin->isLogged();
                        $this->ctrlHome->home();

                    } elseif ($_GET['action'] == 'disconnect') {
                        $this->ctrlHome->disconnect();
                    }

                } else {
                    if(empty($_SESSION['isLogged']) ) {
                        $this->ctrlLogin->login();
                    } else {
                        $this->ctrlHome->home();
                    }
            }
        } catch (Exception $e) {
            echo 'Erreur : '.$e->getMessage();
        }
    }

    private function error($msgError) {

    }
}