<?php

require_once 'model/faq.php';
require_once 'Framework/Controller.php';

class ControllerFaq extends Controller
{
    private $faq;

    public function __construct()
    {
        $this->faq = new Faq();
    }


    public function index() {
    	
        $data=$this->faq->getFaq();

        $lang = $this->session->getAttribute('user')['nationalite'];

        $this->generateView(array("data" => $data, "lang" => $lang));

    }

}