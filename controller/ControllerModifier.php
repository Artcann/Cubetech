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

        if($this->request->getSession()->isAttributeSet('user')) {
            $this->generateView(array("data" => $this->request->getSession()->getAttribute('user')));
        }  else {
            $this->redirect("login");
        }
    }

    public function disconnect()
    {
        parent::disconnect();
    }

    public function modifier() {
        $newPassword= $this->request->getParameter('password');
        $idUser=$this->request->getSession()->getAttribute("user")['id'];

        $this->user->modifyPassword($idUser,password_hash($newPassword,PASSWORD_DEFAULT));
        $this -> generateView();

    }
}
?>