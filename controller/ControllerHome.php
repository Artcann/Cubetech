<?php

require_once 'model/User.php';
require_once 'model/Test.php';
require_once 'Framework/Controller.php';
require_once 'controller/ControllerSecure.php';

/**
 * Class ControllerHome
 */
class ControllerHome extends ControllerSecure
{
    private $user;

    private $test;

    public function __construct() {
        $this->user = new User();
        $this->test = new Test();
    }

    

    public function index() {

        if($this->request->getSession()->isAttributeSet('user')) {
            $this->generateView(array("data" => $this->request->getSession()->getAttribute('user'),
                                      "test" => $this->test->getTestByUser($this->request->getSession()->getAttribute('user')['id'])
                                  ));
        }  else {
            $this->redirect("login");
        }
    }

    public function testUser() {
        $this->test->getTestByUser(5);
    }

    public function disconnect()
    {
        parent::disconnect();
    }
}