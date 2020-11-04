<?php

require_once 'model/User.php';
require_once 'Framework/Controller.php';

class ControllerLogin extends Controller
{
    private $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function index() {
        $view = new View("Login");
        $view->generate();
    }

    public function login() {
        $pseudo = $this->request->getParameter('pseudo');
        $password = $this->request->getParameter('password');

        $user = new User();
        $data = $user->getUserByPseudo($pseudo);

        if(empty($data)) {
            echo "Vous n'êtes pas inscrit";
        } elseif(password_verify($password, $data['password'])){
            $_SESSION['pseudo'] = $pseudo;
            $_SESSION['isLogged'] = true;
            header("Location: /APP_2020/home");
        } else {
            echo "<h1>Mauvais mot de passe</h1>";
        }
    }

    public function isLogged() {
        if(!$_SESSION["isLogged"]) {
            header("Location: index.php");
        }
    }
}