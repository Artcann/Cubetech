<?php

require_once 'model/Sav.php';
require_once 'Framework/Controller.php';

class ControllerSav extends Controller{

    private $sav;


    public function __construct() {
        
        $this->sav = new Sav();
    }


    public function index() {

        $sav = $this->sav->getAllSav();

    }
    
    $this->generateView(); 

}

?>