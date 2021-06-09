<?php

require_once 'Model/User.php';
require_once 'Model/Test.php';
require_once 'Framework/Controller.php';
require_once 'Controller/ControllerRh.php';

class ControllerRhtest extends ControllerRh{

    private $test;

    private $user;


    public function __construct() {
        
        $this->test = new Test();  

        $this->user = new User(); 

    }   


     public function index() {

     	$test = $this->test->getAllTests();

     	$user = $this->user->getAllUsers();

     	$this->generateView(array("test" => $test, 'user' => $user)); 

    }


    public function delete() {

        $this->test->delete($this->request->getParameter('id'));

        $this->redirect("rhtest");
    }



    public function ajout() {
	   
		$this->generateView();
    }

    public function ajoutTest() {
       
        $this->test->addTest($this->request->getParameter('date'),
                             $this->request->getParameter('heure'),
                             $this->request->getParameter('idRh'),
                             $this->request->getParameter('idUser')
                       );
        $this->redirect("RhTest");
    }


  	public function modification() {
        if ($this->request->getMethod() == 'GET') {
            $id = $this->request->getParameter('id');
            $this->generateView(array("test" => $this->test->getTestById($id)));
        } 
        else if ($this->request->getMethod() == 'POST') {
            http_response_code(200);

            $this->test->update($this->request->getParameter('date'),
                               	$this->request->getParameter('heure'),
                               	$this->request->getParameter('idRh'),
                           	   	$this->request->getParameter('id'));

            $this->redirect('rhtest');
        }

    }


	public function disconnect(){

        parent::disconnect();

    }
 
 
}



