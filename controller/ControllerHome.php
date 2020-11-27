<?php

require_once 'model/User.php';
require_once 'Framework/Controller.php';
require_once 'controller/ControllerSecure.php';

/**
 * Class ControllerHome
 */
class ControllerHome extends ControllerSecure
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
}