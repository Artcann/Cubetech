/*Controller*/

<?php
require_once 'model/Recherche.php';
require_once 'Framework/Controller.php';

class ControllerRecherche extends Controller



 
 public function index()

{
     
 $id = $this->request->getParameter('identifiant');
	$nom = $this->request->getParameter('nom');
	$prenom = $this->request->getParameter('prénom');
	$naissance = $this->request->getParameter('date');
	$grade = $this->request->getParameter('grade');
	$caserne = $this->request->getParameter('caserne');
	$nationalite = $this->request->getParameter('nationalité')
	$corps = $this->request->getParameter('corps');
	$statut = $this->request->getParameter('statut');
	$matricule = $this->request->getParameter('matricule');
	$login = $this->getParameter('login');	
	        
	
	$dataArr = $this->getAllUsers($id);

    $this->generateView(array("data" => $dataArr));
 }