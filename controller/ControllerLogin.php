<?php

require_once 'model/User.php';
require_once 'Framework/Controller.php';
require_once 'ControllerSecure.php';

class ControllerLogin extends Controller
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
        $login = $this->request->getParameter('login');
        $password = $this->request->getParameter('password');

        $data = $this->user->getUserByLogin($login);

        if (empty($data)) {
            echo "Vous n'êtes pas inscrit";
        } elseif (password_verify($password, $data['password'])) {
            $this->request->getSession()->setAttribute("login", $login);
            $this->request->getSession()->setAttribute("isLogged", true);
            $this->request->getSession()->setAttribute("prenom", $data['prenom']);
            $this->request->getSession()->setAttribute("nom", $data['nom']);
            $this->request->getSession()->setAttribute("statut", $data['statut']);
            setcookie("statut", $data['statut']);

            if($data['statut'] == 1) $this->redirect("adminhome");
            else $this->redirect("home");
        } else {
            throw new Exception("Vous avez rentré les mauvais identifiants");

        }
    }
}