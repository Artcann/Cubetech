<?php

require_once 'model/User.php';
require_once 'view/View.php';

class ControllerHome
{
    private $user;

    public function __construct() {
        $this->user = new User();
    }

    public function home() {
        $view = new View("Home");
        $view->generate(array("pseudo" => "Artcann"));
    }

    public function disconnect()
    {
        session_unset();

        session_destroy();

        header('Location: /');
    }
}