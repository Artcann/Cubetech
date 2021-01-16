<?php

require_once 'model/User.php';
require_once 'model/Test.php';
require_once 'Framework/Controller.php';


class ControllerRhTest extends Controller {

    private $test;

    private $user;

    public function __construct() {
        
        $this->test = new Test();  

        $this->user = new User(); 

    }    

     public function index() {

     	$test = $this->test->getAllTests();

     	$user = $this->user->getAllUsers();

     	$this->generateView(array("test" => $test, 'user' => $user)); 

    }

    public function delete() {
        $this->test->delete($this->request->getParameter('id'));
        $this->redirect("rhtest");
    }


	public function disconnect(){

        parent::disconnect();

    }
 
 
}

