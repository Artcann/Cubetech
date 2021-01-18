<?php
include_once 'Framework/Controller.php';
include_once 'model/Chat.php';

class ControllerChat extends Controller {

    public function index() {
        if(!$this->request->isParameterSet('id')) {
            http_response_code(404);
            throw new Exception('Page Not Found');
        } else {
            $this->generateView();
        }
    }
    
}