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

        /* $id = ($this->request->isParameterSet('identifiant')) ? $this->request->getParameter('identifiant') : "";
        $nom = $this->request->getParameter('nom');
        $prenom = $this->request->getParameter('prénom');
        $naissance = $this->request->getParameter('date');
        $grade = $this->request->getParameter('grade');
        $caserne = $this->request->getParameter('caserne');
        $nationalite = $this->request->getParameter('nationalité');
        $corps = $this->request->getParameter('corps');
        $statut = $this->request->getParameter('statut');
        $matricule = $this->request->getParameter('matricule'); */	
  
        $dataUser = $this->user->researchUsers($nom, $prenom, $naissance, $grade, $caserne, $nationalite, $corps, $statut, $matricule);


        $this->generateView(array("data" => $dataUser));
}

}