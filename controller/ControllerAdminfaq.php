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

    public function test() {
        echo $this->faq->update('explication',
                            'Vous trouverez les questions les plus répondues, il est important de vérifier ici avant de poser une question dans le forum ! La <b> Foire Aux Questions </b> est un endroit où l administrateur du site répond à vos questions et souvent à des démarches utilent ',
                               '1')->debugDumpParams();
    }


}