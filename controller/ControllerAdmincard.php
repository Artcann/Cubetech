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

        $lang = $this->session->getAttribute('user')['nationalite'];
        
        $this->generateView(array("data" => $this->card->getAllCards()));
    }

    public function create() {

        $lang = $this->session->getAttribute('user')['nationalite'];
        
        $this->generateView();
    }

    public function create_post() {

    }

}