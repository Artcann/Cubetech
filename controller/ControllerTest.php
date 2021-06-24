<?php

include_once 'Framework/Controller.php';
include_once 'model/Test.php';

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
        $test = $this->test->getRecentTestByUser(5, 2);
        var_dump($test);
    }

    public function add() {
        $this->test->insertTest($this->request->getParameter('trame'),
                                $this->request->getParameter('UserName'),
                                $this->session->getAttribute('user')['id']);
        $this->redirect("adminhome");
    }

}
