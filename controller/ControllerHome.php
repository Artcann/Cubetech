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
        if(!isset($_SESSION['isLogged']) && !($_SESSION['isLogged'])) {
            header('Location: http://localhost/APP_2020/login');
        }  else {
            $view = new View("Home");
            $view->generate(array("pseudo" => "Artcann"));
        }
    }

    public function disconnect()
    {
        session_unset();

        session_destroy();

        header('Location: /');
    }
}