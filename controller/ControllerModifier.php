<?php

require_once 'model/User.php';
require_once 'model/Test.php';
require_once 'model/Corps.php';
require_once 'model/Caserne.php';
require_once 'Framework/Controller.php';
require_once 'Controller/ControllerSecure.php';


class ControllerModifier extends ControllerSecure
{
    private $user;
    private $corps;

    private $test;

    private $caserne;
    private $result;
    private $succesMessage;

    public function __construct() {
        $this->user = new User();
        $this->test = new Test();

        $this->corps = new Corps();

        $this->caserne = new Caserne();
    }

    public function index() {
      $error=NULL;


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

                    array_push($tableauTestRh, ' Le ' . $j['date'] . ' à ' . $j['heure'] . ' avec ' . $this->user->getUserById($j['idUser'])['prenom'] . '</br>');

                }
            }

            else if($data['statut'] =="Administrateur"){
            }
            $scriptData = Array('statut'=> $data['statut']);


            $this->generateView(array("data" => $data, "corps" => $corps,
                                      "caserne" => $caserne, "test" => $tableauDeTest,
                                      "statut" => $statut, "tableauTestRh" => $tableauTestRh,
                                      "scriptData"=> $scriptData,"error"=>$error
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

    public function modifier() {  /*FONCTION QUI REDIRIGE QUAND LE GARS A CHANGE SON MDP*/

      // if($this->request->isParameterSet('newPass','verifiedPassword','confirmNewPass')){  /*n utilise pas les variables GET ET post mais utilise le meme principe*/
        $currentPassword=$this->session->getAttribute("user")['password'];
        $verifiedPassword=$this->request->getParameter('verifiedPassword');
        $newPassword= $this->request->getParameter('newPass');
        $idUser=$this->session->getAttribute("user")['id'];
        $confirmedPassword = $this->request->getParameter("confirmNewPass");
        $result = "Quelque chose s'est mal passé...";
       if (!password_verify($verifiedPassword,$currentPassword)){
          $succesMessage= "Vous ne connaissez même plus votre mot de passe actuel !";
          $this->generateView(array("result"=>$result,"succesMessage"=>$succesMessage));
        }
        elseif (password_verify($newPassword,$currentPassword)){
          $succesMessage= "Vous n'avez pas effectué de changement... Vous avez changé avec le même mot de passe !";
          $this->generateView(array("result"=>$result,"succesMessage"=>$succesMessage));
        }
        elseif($newPassword!=$confirmedPassword){
          $succesMessage= "Vous n'avez pas bien confirmé votre mot de passe !";
          $this->generateView(array("result"=>$result,"succesMessage"=>$succesMessage));
        }
        else{
            $this->user->modifyPassword($idUser, password_hash($newPassword, PASSWORD_DEFAULT));
            $result = "Enregistrement terminé !";
            $succesMessage= "Vous avez modifié votre mot de passe avec succès.";
            $this->generateView(array("result"=>$result,"succesMessage"=>$succesMessage));
        }
      // }
      // else{
      //   throw new Exception("Vous n'avez pas tout rempli !");
      // }

    }
}
