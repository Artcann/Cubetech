<?php
include_once 'Framework/Controller.php';

class ControllerChat extends Controller {

    public function index() {
        echo $this->request->getMethod();
        $this->generateView();
    }

    
}