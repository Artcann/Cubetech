<?php
include_once 'Framework/Controller.php';
include_once 'Model/Chat.php';

class ControllerChat extends Controller {

    private $chat;

    public function __construct() {
        $this->chat = new Chat();
    }

    public function index() {
        if(!$this->request->isParameterSet('id')) {
            http_response_code(404);
            throw new Exception('Page Not Found');
        } else {
            $this->generateView();
        }
    }

    public function insert() {
        $this->chat->insertMessage(1, 2, "test");
    }

    
}