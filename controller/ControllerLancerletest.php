<?php

include_once 'Framework/Controller.php';
include_once 'model/User.php';
include_once 'Model/Test.php';

class ControllerLancerletest extends Controller{

	private $test;
	private $user;

    public function __construct() {
        $this->test = new Test();
        $this->user = new User();

    }

    public function index()
    {
    	$test = $this->test->getTestByRh($this->session->getAttribute('user')['id']);
    	$data = $this->user->getAllUsers();
        $this->generateView(array("test" => $test, "data" => $data));
    }

}