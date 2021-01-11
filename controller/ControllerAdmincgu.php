<?php

require_once 'ControllerAdmin.php';
require_once 'Model/Cgu.php';

class ControllerAdmincgu extends ControllerAdmin {

    private $cgu;

    public function __construct() {
        $this->cgu = new Cgu();
    }

}