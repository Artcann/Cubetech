<?php

require_once 'model/Sav.php';
require_once 'ControllerAdmin.php';

class ControllerSav extends ControllerAdmin{

    private $sav;

    public function __construct() {
        
        $this->sav = new Sav();
    }

    public function index() {

        $sav = $this->sav->getAllSav();

        $this->generateView(); 


    }
}

?>
