<?php

require_once 'Model/Faq.php';
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

        

        $this->generateView(array("data" => $data));

    }

}