<?php

require_once "controller/ControllerAdmin.php";
require_once 'model/user.php';

class ControllerAdminuser extends ControllerAdmin {

    private $user;

    function __construct()
    {
        $this->user = new User();
    }

    public function index() {
        $data = $this->user->getAllUsers();

        $this->generateView($data);
    }

}