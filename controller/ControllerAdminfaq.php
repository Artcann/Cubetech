<?php

require_once 'ControllerAdmin.php';
require_once 'model/Faq.php';

class ControllerAdminfaq extends ControllerAdmin {

    private $faq;

    public function __construct() {
        $this->faq = new Faq();
    }

    public function index() {
        $this->generateView(array("faq" => $this->faq->getFaq()));
    }

    public function modify() {
        $id = $this->request->getParameter('id');

        $this->generateView(array("faq" => $this->faq->getFaqById($id)));
    }

}