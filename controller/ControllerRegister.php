<?php

require_once 'model/User.php';
require_once 'view/View.php';

class ControllerRegister
{
    private $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function register() {
        $view = new View("Register");
        $view->generate();
    }

    public function registerVerification($pseudo, $password)
    {
        $user = new User();

        if ($_POST['password'] == $_POST['password2']) {
            $user->insertUser($pseudo, $password);
            echo "<h1>Registration Complete</h1>";
            header("Location: index.php?action=login");
        }
    }
}