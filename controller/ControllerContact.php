<?php
require_once 'Framework/Controller.php';
require_once 'Framework/Configuration.php';
require_once 'controller/ControllerSecure.php';
require_once 'Framework/View.php';
require_once 'model/Contact.php';

/**
 * Class ControllerContact
 */
class ControllerContact extends Controller
{
    private $contact;

    public function __construct()
    {
        $this->contact = new Contact();
    }
    public function index()
    {
       $liste=$this->contact->getType();
       $this->generateView($liste);
    }

    public function message()
    {
        $type=$this->request->getParameter("type");
        if ($type=='1')
            $destinataire=2;
        elseif ($type=='2')
            $destinataire=3;
        elseif ($type=='3')
            $destinataire=3;
        else $destinataire=3;

        $contenu=$this->request->getParameter("message");

        $status=0;
        $date= date("Y-m-d");
        $idUser=$this->session->getAttribute("user")["id"];
        $this->contact->insertMessage($idUser,$contenu,$type,$date,$status,$destinataire);
        $this->generateView();
    }
}
