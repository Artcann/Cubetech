<?php
require_once 'Framework/Controller.php';
require_once 'Framework/Configuration.php';
require_once 'controller/ControllerSecure.php';

class ControllerContact extends Controller
{
    public function index()
    {
            $this->generateView();
    }
    public function Getdestinataire()
    {
        if ($_POST['type']=='rendez-vous')
            $destinataire=2;
        if ($_POST['type']=='Bug')
            $destinataire=3;
        if ($_POST['type']=='suggestion')
            $destinataire=3;

    }

    public function Message()
    {
        $contenu=$_POST['message'];
        $destinataire=$_POST['destinataire'];
        $date= date('F h:i:s A');
        $idUser=$this->request->getSession()->getAttribute("user")['name'];
    }
}
