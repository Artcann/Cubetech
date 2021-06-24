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

    private $requestStack;


    public function __construct() {

        $this->test = new Test();

        $this->user = new User();

        $this->caserne = new Caserne();

        $this->card = new Card();

        $this->requestStack = array('111000045', '111000046');
    }


    public function index()
    {

    	$test = $this->test->getTestByRh($this->session->getAttribute('user')['id']);

    	$data = $this->user->getAllUsers();

        $caserne = $this->caserne->getAllCaserne();

        $card = $this->card->getCardByCaserne($this->session->getAttribute('user')['caserne']);

        $this->generateView(array("test" => $test, "data" => $data, 'caserne' => $caserne, "card" => $card));

    }

    public function getNextRequest() {
        if($this->verification()) {
            header('Content-Type: application/json');
            echo json_encode(array_shift($this->requestStack));
        }
    }

    public function addRequest() {
        array_push($this->requestStack, $this->request->getParameter(''));
    }

    private function verification() {
        // $headers = apache_request_headers();
        // if(isset($headers['Authorization'])) {
        //     $token = $headers['Authorization'];
        //     return $token == 'helloworld';
        // } else {
        //     return false;
        // }
        
        return true;
    }

}

?>


