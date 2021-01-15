<?php

require_once 'ControllerAdmin.php';
require_once 'Model/Cgu.php';

class ControllerAdmincgu extends ControllerAdmin {

    private $cgu;

    public function __construct() {
        $this->cgu = new Cgu();
    }

    public function index() {
        $lang = $this->session->getAttribute('user')['nationalite'];
        $this->generateView(array("data" => $this->cgu->getCgu(), "lang" => $lang));
    }

    public function modification() {
        if ($this->request->getMethod() == 'GET') {
            $id = $this->request->getParameter('id');
            $lang = $this->session->getAttribute('user')['nationalite'];
            $this->generateView(array("cgu" => $this->cgu->getCguById($id), "lang" => $lang));
        } else if ($this->request->getMethod() == 'POST') {
            http_response_code(200);
            $this->cgu->update($this->request->getParameter('title'),
                               $this->request->getParameter('content'),
                               $this->request->getParameter('id'));
        }
    }

}