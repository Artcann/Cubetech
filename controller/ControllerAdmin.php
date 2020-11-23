<?php

require_once "Framework/Controller.php";

abstract class ControllerAdmin extends Controller
{

    public function executeAction($action)
    {
        if($this->request->getSession()->getAttribute("statut") == 1) {
            parent::executeAction($action);
        } else {
            parent::redirect('Home');
        }

    }

}