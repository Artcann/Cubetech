<?php
require_once "Framework/Controller.php";
require_once "model/Test.php";
require_once "model/User.php";
require_once "model/Chat.php";

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


    public function chat() {
        if($this->request->getMethod() == 'GET') {
            header('Content-Type: application/json');
            http_response_code(200);
            echo json_encode($this->chat->getRecentMessages($this->session->getAttribute('user')['id'], 
                                                            $this->request->getParameter('id'),
                                                            $this->request->getParameter('lastId')), JSON_PRETTY_PRINT);
        } else if ($this->request->getMethod() == 'POST') {
            header('Content-Type: application/json');
            http_response_code(204);
            $this->chat->insertMessage($this->session->getAttribute('user')['id'],
                                       $this->request->getParameter('idContact'),
                                       $this->request->getParameter('message'));
        } else {
            header('Content-Type: application/json');
            http_response_code(400);
        }
    }


    /**
     * @return bool
     */
    private function verification() {
        return $this->request->getParameter('access') == 'moeve';
    }
}