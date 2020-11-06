<?php

require_once 'model/User.php';
require_once 'Framework/Controller.php';
require_once 'ControllerSecure.php';

class ControllerLogin extends ControllerSecure
{
    private $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function index() {
        $this->generateView();
    }

    public function login()
    {
        $pseudo = $this->request->getParameter('pseudo');
        $password = $this->request->getParameter('password');

        $user = new User();
        $data = $user->getUserByPseudo($pseudo);

        if (empty($data)) {
            echo "Vous n'êtes pas inscrit";
        } elseif (password_verify($password, $data['password'])) {
            $this->request->getSession()->setAttribute("pseudo", $pseudo);
            $this->request->getSession()->setAttribute("isLogged", true);
            $this->redirect("home");
        } else {
            $this->generateView(array('errorMessage' => 'Login ou mot de passe incorrect'));

        }
    }
}