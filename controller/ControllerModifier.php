<?php

require_once 'model/User.php';
require_once 'Framework/Controller.php';
require_once 'controller/ControllerSecure.php';


class ControllerModifier extends ControllerSecure
{
    private $user;

    public function __construct() {
        $this->user = new User();
    }

    public function index() {

        if($this->session->isAttributeSet('user')) {
            $this->generateView(array("data" => $this->session->getAttribute('user')));
        }  else {
            $this->redirect("login");
        }
    }

    public function disconnect()
    {
        parent::disconnect();
    }

    public function modifier() {
        $currentPassword=$this->session->getAttribute("user")['password'];
        $verifiedPassword=$this->request->getParameter('verifiedPassword');
        $newPassword= $this->request->getParameter('password');
        $idUser=$this->session->getAttribute("user")['id'];

       if (!password_verify($verifiedPassword,$currentPassword)){
            //header("Location: /Cubetech/Modifier?password=false");
            //exit();
            throw new Exception("Vous ne connaissez plus votre propre MDP ou vous êtes un criminel !");
        }
        elseif (password_verify($newPassword,$currentPassword)){
             //header("Location: /Cubetech/Modifier?password=same");
             //exit();
            throw new Exception("Vous avez changer votre mot de passe avec celui que vous avez déjà !");
        }
        else{
            $this->user->modifyPassword($idUser, password_hash($newPassword, PASSWORD_DEFAULT));
            $this->generateView();
        }

    }
}

