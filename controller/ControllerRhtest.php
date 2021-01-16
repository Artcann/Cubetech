<?php

require_once 'model/User.php';
require_once 'model/Test.php';
require_once 'Framework/Controller.php';


class ControllerRhTest extends Controller {

    

    public function __construct() {
        
       

    }    

     public function index() {
     	$this->generateView(); 
    }


	public function disconnect(){

        parent::disconnect();

    }
 
 
}
