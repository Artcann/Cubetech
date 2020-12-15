<?php

require_once 'ControllerAdmin.php';

/**
 * Class ControllerAdminhome
 */
class ControllerAdminhome extends ControllerAdmin
{
    public function index() {
        $this->generateView(array("prenom" => $this->request->getSession()->getAttribute("user")['prenom']));
    }

    public function register() {
        $this->redirect("register");
    }

    public function disconnect()
    {
        parent::disconnect(); 
    }
}