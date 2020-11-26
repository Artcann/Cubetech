<?php

require_once 'model/User.php';
require_once 'Framework/Controller.php';

class ControllerHome extends Controller
{
    private $user;

    public function __construct() {
        $this->user = new User();
    }

    public function index() {
        if($this->request->getSession()->isAttributeSet('user')) {
            $this->generateView(array("prenom" => $this->request->getSession()->getAttribute('user')['prenom'],
                                      "nom" => $this->request->getSession()->getAttribute('user')['nom'],
                                      "login" => $this->request->getSession()->getAttribute('user')['login'],
                                      "naissance" => $this->request->getSession()->getAttribute('user')['naissance'],
                                      "nationalite" => $this->request->getSession()->getAttribute('user')['nationalite'],
                                      "matricule" => $this->request->getSession()->getAttribute('user')['matricule'],
                                      "grade" => $this->request->getSession()->getAttribute('user')['grade'],
                                      "caserne" => $this->request->getSession()->getAttribute('user')['caserne'],
                                      "corps" => $this->request->getSession()->getAttribute('user')['corps'],
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