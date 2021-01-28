<?php

require_once 'Controller/ControllerAdmin.php';
require_once 'model/Caserne.php';

/**
 * Class ControllerAdmincaserne
 */
class ControllerAdmincaserne extends ControllerAdmin {

    private $caserne;

    public function __construct()
    {
        $this->caserne = new Caserne();
    }

    public function index()
    {
        $data = $this->caserne->getAllCaserne();

        $this->generateView(array("data" => $data));
    }

    public function create() {
        $this->generateView();
    }

    public function create_post() {
        $data =  array();
        array_push($data, $this->request->getParameter('ville'));

        $this->caserne->insertCaserne($data);
    }
}
