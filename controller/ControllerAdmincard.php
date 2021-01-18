<?php

require_once 'controller/ControllerAdmin.php';
require_once 'model/Card.php';

/**
 * Class ControllerAdmincard
 */
class ControllerAdmincard extends ControllerAdmin {

    private $card;

    function __construct() {
        $this->card = new Card();
    }

    public function index() {
        
        $this->generateView(array("data" => $this->card->getAllCards()));
    }

    public function create() {
        
        $this->generateView();
    }

    public function create_post() {

    }

}