<?php

require_once 'Model/User.php';
require_once 'Model/Test.php';
require_once 'Model/Corps.php';
require_once 'Model/Caserne.php';
require_once 'Framework/Controller.php';
require_once 'Controller/ControllerSecure.php';

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

        $testRh = $this->test->getTestByRh($this->session->getAttribute('user')['id']);

        $statut = $this->session->getAttribute('user')['statut'];


        $tableauDesRdv = array();

        $tableauDeTest = array();

        $testRhATraiter = array();

        $tableauTestRh = array();


        if ($data["statut"] != 3) {

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



        else if ($data['statut'] == 'Ressource humaine') {

            foreach ($testRh as $i) {

                array_push($testRhATraiter, $i);

            }

            foreach ($testRhATraiter as $j) {

                array_push($tableauTestRh, ' Le ' . $j['date'] . ' à ' . $j['heure'] . ' avec ' . $j['idUser'] . '</br>');

            }
        }

        $scriptData = Array('statut'=> $data['statut']);


        $this->generateView(array("data" => $data, "corps" => $corps, 
                                  "caserne" => $caserne, "test" => $tableauDeTest, 
                                  "statut" => $statut, "tableauTestRh" => $tableauTestRh, 
                                  "scriptData"=> $scriptData
                                 )); 

    }

    public function switchlang() {
        if($this->request->getParameter('id') == 1) {
            $this->session->setAttribute("lang", "en");
            $this->redirect("login");
        } else {
            $this->session->setAttribute("lang", "fr");
            $this->redirect("login");
        }
    }


    public function disconnect()
    {
        parent::disconnect();
    }
 
 
}


