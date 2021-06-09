<?php

require_once 'Controller/ControllerAdmin.php';
require_once 'Model/Card.php';
require_once 'Model/Caserne.php';

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

    public function createpost() {
        $this->card->insertCard($this->request->getParameter('date'),
                                    $this->request->getParameter('statut'),
                                    $this->request->getParameter('caserne'));
        $this->redirect('adminhome');
    }

    public function modify() {
        $this->generateView(array("id" => $this->request->getParameter('id'),
                                    'data' => $this->caserne->getAllCaserne()));
    }

    public function modifypost() {
        $this->card->modifyCard($this->request->getParameter('id'),
                                $this->request->getParameter('date'),
                                $this->request->getParameter('statut'),
                                $this->request->getParameter('caserne'),
    );
        $this->redirect('admincard');
    }

    public function delete() {
        $this->card->deleteCard($this->request->getParameter('id'));
        $this->redirect('admincard');
    }

}