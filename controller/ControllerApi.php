<?php
require_once "Framework/Controller.php";
require_once "Model/Test.php";
require_once "Model/User.php";

/**
 * Class ControllerApi
 */
class ControllerApi extends Controller
{

    private $user;

    private $test;

    public function __construct() {
        $this->user = new User();
        $this->test = new Test();
    }

    public function index()
    {
        echo null;
    }

    public function getUsers() {
        header('Content-Type: application/json');
        echo json_encode($this->user->getAllUsers());
    }

    /**
     * @param $id
     */
    public function getTestByUser() {
        header('Content-Type: application/json');
        echo json_encode($this->test->getTestByUser($this->request->getParameter('id')), JSON_PRETTY_PRINT);
    }
}