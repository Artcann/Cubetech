<?php

include_once 'Framework/Controller.php';
include_once 'Model/Test.php';

/**
 * Class ControllerTest
 */
class ControllerTest extends Controller {

    private $test;

    public function __construct() {
        $this->test = new Test();
    }

    public function index()
    {
        $this->generateView();
    }

    public function add() {
        $this->test->insertTest($this->request->getParameter('trame'),
                                $this->request->getParameter('UserName'),
                                $this->request->getSession()->getAttribute('user')['id']);
        $this->redirect("adminhome");
    }

}
