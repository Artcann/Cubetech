<?php
require_once "Framework/Controller.php";
require_once "Model/Test.php";
require_once "Model/User.php";
require_once "Model/Chat.php";

/**
 * Class ControllerApi
 */
class ControllerApi extends Controller
{

    private $user;

    private $test;

    private $chat;

    public function __construct() {
        $this->user = new User();
        $this->test = new Test();
        $this->chat = new Chat();
    }

    public function index()
    {
        echo null;
    }

    public function getUsers() {
        if($this->verification() && $this->request->getMethod() == 'GET') {
            header('Content-Type: application/json');
            http_response_code(200);
            echo json_encode($this->user->getAllUsers());
        } else {
            http_response_code(400);
        }
    }

    // public function getCurrentUser() {
    //     if($this->verification()) {
    //         header('Content-Type: application/json');
    //         echo json_encode($this->session->getAttribute('user'));
    //     }
    // }

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

    public function getRecentMessages() {
        if($this->verification() && $this->request->getMethod() == 'GET') {
            header('Content-Type: application/json');
            http_response_code(200);
            echo json_encode($this->chat->getRecentMessages($this->session->getAttribute('user')['id'], $idContact), JSON_PRETTY_PRINT);
            //echo json_encode($this->chat->getRecentMessages(1, $this->request->getParameter('id')), JSON_PRETTY_PRINT);    
        }
    }

    /**
     * @return bool
     */
    private function verification() {
        return $this->request->getParameter('access') == 'moeve';
    }
}