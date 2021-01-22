<?php

require_once 'Controller/ControllerAdmin.php';
require_once 'model/Card.php';
require_once 'model/Caserne.php';

/**
 * Class ControllerAdmincard
 */
class ControllerAdmincard extends ControllerAdmin {

    private $card;

    private $caserne;

    function __construct() {
        $this->card = new Card();
        $this->caserne = new Caserne();
    }

    public function index() {
        
        $this->generateView(array("data" => $this->card->getAllCards()));
    }

    public function create() {
        
        $this->generateView(array('data' => $this->caserne->getAllCaserne()));
    }

    public function create_post() {

    }

}