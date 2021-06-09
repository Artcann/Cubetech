<?php

require_once 'Model/Cgu.php';
require_once 'Framework/Controller.php';

class ControllerCgu extends Controller
{
    private $cgu;

    public function __construct()
    {
        $this->cgu = new Cgu();
    }


    public function index() {
        $data=$this->cgu->getCgu();
        $this->generateView($data);
    }

}