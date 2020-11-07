<?php

require_once 'ControllerSecure.php';

class ControllerAdmin extends Controller
{
    public function index() {
        $this->generateView(array("pseudo" => $this->request->getSession()->getAttribute("prenom")));
    }

    public function register() {
        $this->redirect("register");
    }
}