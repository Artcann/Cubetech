<?php

require_once 'model/Sav.php';
require_once 'ControllerAdmin.php';


class ControllerAdminsav extends ControllerAdmin {

    private $sav;

    public function __construct() {
        
        $this->sav = new Sav();
    }

    public function index() {

        $sav = $this->sav->getAllSav();

        $rdv = array();

        $bug = array();

        $suggestion = array();




        foreach ($sav as $key) {

        	if ($key['statut'] == 0) {
	        	switch ($key["type"]) {
	        		case '1':
	        			array_push($rdv, $key);
	        			break;
	        		
	        		case '2':
	        			array_push($bug, $key);
	        			break;
	        			
	        		case '3':
	        			array_push($suggestion, $key);
	        			break;
	        	}
	        }
        }



        $this->generateView(array("sav" => $sav, "rdv" => $rdv, "bug" => $bug, "suggestion" => $suggestion));

    }
}

?>
