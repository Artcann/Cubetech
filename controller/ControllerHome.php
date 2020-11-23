<?php

require_once 'model/User.php';
require_once 'Framework/Controller.php';
require_once 'controller/ControllerSecure.php';

class ControllerHome extends ControllerSecure
{
    private $user;

    public function __construct() {
        $this->user = new User();
    }

    public function index() {
        $this->generateView(array("pseudo" => $this->request->getSession()->getAttribute("nom")));
    }

    public function disconnect()
    {
        parent::disconnect();
    }
}