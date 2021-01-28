<?php
require_once 'model/User.php';
require_once 'Framework/Controller.php';

class ControllerRecherche extends Controller {

    private $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function index()
    {
        $this->generateView();
    }

    public function result()

    {
        $params = array('id', 'nom', 'prenom', 'naissance', 'grade', 'caserne', 'nationalite', 'corps', 'statut', 'matricule');

        foreach($params as $param) {
            ${$param} = ($this->request->isParameterSet($param)) ? $this->request->getParameter($param) : "";
        }
  
        $dataUser = $this->user->researchUsers($nom, $prenom, $naissance, $grade, $caserne, $nationalite, $corps, $statut, $matricule);


        #$this->generateView(array("data" => $dataUser));
}

}