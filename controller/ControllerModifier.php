<?php

require_once 'model/User.php';
require_once 'model/Test.php';
require_once 'model/Corps.php';
require_once 'model/Caserne.php';
require_once 'Framework/Controller.php';
require_once 'controller/ControllerSecure.php';


class ControllerModifier extends ControllerSecure
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

        if($this->session->isAttributeSet('user')) {

            /*code ugo*/
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


            /*end code ugo*/
        }  else {
            $this->redirect("login");
        }
    }

    public function disconnect()
    {
        parent::disconnect();
    }

    public function modifier() {
      if($this->request->isParameterSet('verifiedPassword')){
        $currentPassword=$this->session->getAttribute("user")['password'];
        $verifiedPassword=$this->request->getParameter('verifiedPassword');
        $newPassword= $this->request->getParameter('password');
        $idUser=$this->session->getAttribute("user")['id'];
        $confirmedPassword = $this->request->getParameter("confirmNewPass");
       if (!password_verify($verifiedPassword,$currentPassword)){
            //header("Location: /Cubetech/Modifier?password=false");
            //exit();
          throw new Exception("Vous ne connaissez plus votre propre MDP ou vous êtes un criminel !");
        }
        elseif (password_verify($newPassword,$currentPassword)){
             //header("Location: /Cubetech/Modifier?password=same");
             //exit();
          throw new Exception("Vous avez changer votre mot de passe avec celui que vous avez déjà !");
        }
        elseif($newPassword!=$confirmedPassword){
          throw new Exception("Vous avez pas mis les deux mêmes mot de passes...");
        }
        else{
            $this->user->modifyPassword($idUser, password_hash($newPassword, PASSWORD_DEFAULT));
            $this->generateView();
        }
      }
      else{
        throw new Exception("Vous n'avez rien rempli");
      }

    }
}
