<?php

include_once 'Framework/Controller.php';
include_once 'Model/Test.php';

class ControllerLancerletest extends Controller {

	private $test;

    public function __construct() {
        $this->test = new Test();
    }

    public function index()
    {
    	$test = $this->test->getTestByRh($this->session->getAttribute('user')['id']);
        $this->generateView(array("test" => $test));
    }

}