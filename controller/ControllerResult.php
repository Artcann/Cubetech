<?php
require_once 'controller/ControllerSecure.php';

/**
 * Class ControllerResult
 */
class ControllerResult extends ControllerSecure
{

    public function index()
    {
        $this->generateView();
    }
}