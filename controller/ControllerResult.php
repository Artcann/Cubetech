<?php
require_once 'Controller/ControllerSecure.php';

/**
 * Class ControllerResult
 */
class ControllerResult extends ControllerSecure
{

    public function index()
    {
        $this->generateView(array("id" => $this->session->getAttribute('user')['id']));
    }


}