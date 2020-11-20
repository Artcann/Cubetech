<?php

require_once 'model/User.php';
require_once 'Framework/Controller.php';

class ControllerHome extends Controller
{
    private $user;

    public function __construct() {
        $this->user = new User();
    }

    public function index() {
        if($this->request->getSession()->isAttributeSet('isLogged')) {
            $this->generateView(array("pseudo" => "Artcann"));
        }  else {
            $this->redirect("login");
        }
    }

    public function disconnect()
    {
        parent::disconnect();
    }
}