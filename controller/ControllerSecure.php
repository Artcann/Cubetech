<?php

require_once 'Framework/Controller.php';

/**
 * Class ControllerSecure
 */
abstract class ControllerSecure extends Controller
{

    /**
     * @param $action
     * @throws Exception
     */
    public function executeAction($action)
    {
        if ($this->session->isAttributeSet("user")) {
            parent::executeAction($action);
        }
        else {
            $this->redirect("login");
        }
    }

}
