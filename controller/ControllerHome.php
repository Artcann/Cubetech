<?php

require_once 'model/User.php';
require_once 'model/Test.php';
require_once 'model/Corps.php';
require_once 'model/Caserne.php';
require_once 'Framework/Controller.php';
require_once 'Controller/ControllerSecure.php';

/**
 * Class ControllerHome
 */
class ControllerHome extends ControllerSecure
{
    private $user;

    private $corps;

    private $test;

    private $caserne;

    public function __construct() {
        $this->user = new User();
        $this->test = new Test();
        $this->corps = new Corps();
        $this->caserne = new Caserne();
    }    


    public function index() {

        if($this->request->getSession()->isAttributeSet('user')) {
            $this->generateView(array("data" => $this->request->getSession()->getAttribute('user'),
                                      "corps" => $this->corps->getAllCorps(),
                                      "caserne" => $this->caserne->getAllCaserne(),
                                      "test" => $this->test->getTestByUser($this->request->getSession()->getAttribute('user')['id']),
                                      "statut" => $this->request->getSession()->getAttribute('user')['statut']
                                  )); 

        }  else {
            $this->redirect("login");
        }
    }

    public function disconnect()
    {
        parent::disconnect();
    }
 
}







