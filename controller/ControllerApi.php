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
        if($this->verification()) {
            header('Content-Type: application/json');
            echo json_encode($this->user->getAllUsers());
        }
    }

    public function getCurrentUser() {
        if($this->verification()) {
            header('Content-Type: application/json');
            echo json_encode($this->session->getAttribute('user'));
        }
    }

    /**
     * @param $id
     */
    public function getRecentTestByUser() {
        if($this->verification()) {
            header('Content-Type: application/json');
            echo json_encode($this->test->getRecentTestByUser($this->request->getParameter('id'),
                                                              $this->request->getParameter('idTest')), JSON_PRETTY_PRINT);
        }
    }

    /**
     * @return bool
     */
    private function verification() {
        // return $this->request->getParameter('access') == 'moeve';
        return true;
    }
}