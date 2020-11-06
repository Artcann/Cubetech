<?php

require_once 'Framework/Controller.php';

abstract class ControllerSecure extends Controller
{

    public function executeAction($action)
    {
        if ($this->request->getSession()->existeAttribut("idUtilisateur")) {
            parent::executeAction($action);
        }
        else {
            $this->redirect("login");
        }
    }

}