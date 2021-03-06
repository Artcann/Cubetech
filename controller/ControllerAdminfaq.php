<?php

require_once 'ControllerAdmin.php';
require_once 'Model/Faq.php';

class ControllerAdminfaq extends ControllerAdmin {

    private $faq;

    public function __construct() {
        $this->faq = new Faq();
    }

    public function index() {
    
        $this->generateView(array("faq" => $this->faq->getFaq()));
    }

    public function modification() {
        if ($this->request->getMethod() == 'GET') {
            $id = $this->request->getParameter('id');
        
            $this->generateView(array("faq" => $this->faq->getFaqById($id)));
        } else if ($this->request->getMethod() == 'POST') {
            http_response_code(200);
            $this->faq->update($this->request->getParameter('title'),
                               $this->request->getParameter('content'),
                               $this->request->getParameter('id'));
        }
    }

    public function ajout() {

        $this->generateView();
    }

    public function ajoutpost() {
        $this->faq->addFaq($this->request->getParameter('title'),
                            $this->request->getParameter('content'));
        $this->redirect("adminfaq");
    }

    public function delete() {
        $this->faq->delete($this->request->getParameter('id'));
        $this->redirect("adminfaq");
    }
}


