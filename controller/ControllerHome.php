<?php

require_once 'model/User.php';
require_once 'model/Test.php';
require_once 'model/Corps.php';
require_once 'model/Caserne.php';
require_once 'Framework/Controller.php';
require_once 'controller/ControllerSecure.php';

/**
 * Class ControllerHome
 */
class ControllerHome extends ControllerSecure
{
    private $user;

    private $corps;

    private $test;

    private $caserne;

    public function __construct() {
        
        $this->user = new User();

        $this->test = new Test();

        $this->corps = new Corps();

        $this->caserne = new Caserne();
    }    


    public function index() {


        $data = $this->session->getAttribute('user');

        $corps = $this->corps->getAllCorps();

        $caserne = $this->caserne->getAllCaserne();

        $test = $this->test->getTestByUser($this->session->getAttribute('user')['id']);

        $statut = $this->session->getAttribute('user')['statut'];

        $tableauDesRdv = array();

        $tableauDeTest = array();


        if ($data["statut"] != 3){
            $data["matricule"] = '*';
            $data["grade"] = '*';
            $caserne[$data['caserne']]["ville"] = '*';
            $corps[$data["corps"]]['type'] = '*';
        }


        switch ($data['statut']) { 
            case '1':
                $data['statut'] = "Administrateur";
                break;
            
            case '2':
                $data['statut'] = "Ressource humaine";
                break;

            case '3':
                $data['statut'] = "Militaire";
                break;
        }


        if ($data['statut'] == 'Militaire') {


            foreach ($test as $rdv){
                if ($rdv['statut'] == 0){
                    array_push($tableauDesRdv, $rdv);
                }  
            }


            foreach ($tableauDesRdv as $test_à_afficher) {
                array_push($tableauDeTest, ' Le ' . $test_à_afficher['date'] . ' à ' . $test_à_afficher['heure'] . '</br>');
            }
        }

        $scriptData = Array(
          'statut'=> $data['statut']
        );

        $this->generateView(array("data" => $data, "corps" => $corps, "caserne" => $caserne, "test" => $tableauDeTest, "statut" => $statut,  
            "scriptData"=>$scriptData)); 
    }

    public function disconnect()
    {
        parent::disconnect();
    }
 
 
}








