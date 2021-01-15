<?php
require_once 'Controller/ControllerSecure.php';

/**
 * Class ControllerResult
 */
class ControllerResult extends ControllerSecure
{

    public function index()
    {
    	$lang = $this->session->getAttribute('user')['nationalite'];
        $this->generateView(array("id" => $this->session->getAttribute('user')['id'], "lang" => $lang));
    }


}