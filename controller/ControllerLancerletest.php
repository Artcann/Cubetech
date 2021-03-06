<?php

include_once 'Framework/Controller.php';
include_once 'Model/User.php';
include_once 'Model/Test.php';
include_once 'Model/Caserne.php';
include_once 'Model/Card.php';

class ControllerLancerletest extends Controller{

	private $test;

	private $user;

    private $caserne;

    private $card; 


    public function __construct() {

        $this->test = new Test();

        $this->user = new User();

        $this->caserne = new Caserne();

        $this->card = new Card();

    }


    public function index()
    {

    	$test = $this->test->getTestByRh($this->session->getAttribute('user')['id']);

    	$data = $this->user->getAllUsers();

        $caserne = $this->caserne->getAllCaserne();

        $card = $this->card->getCardByCaserne($this->session->getAttribute('user')['caserne']);

        $this->generateView(array("test" => $test, "data" => $data, 'caserne' => $caserne, "card" => $card));

    }

}

?>


