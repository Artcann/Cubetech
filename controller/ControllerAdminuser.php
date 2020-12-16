<?php

require_once "controller/ControllerAdmin.php";
require_once 'model/user.php';

/**
 * Class ControllerAdminuser
 */
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

    public function register() {
        $this->redirect('register');
    }

    public function delete() {
        $this->user->deleteUserById($this->request->getParameter('id'));

        $this->redirect('adminuser');
    }

    public function json() {
        //header('Content-Type: application/json');

        $this->generateView(array("data" => $this->user->getAllUsersRaw()));
    }

}
