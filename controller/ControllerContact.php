<?php
require_once 'Framework/Controller.php';
require_once 'Framework/Configuration.php';
require_once 'controller/ControllerSecure.php';

/**
 * Class ControllerContact
 */
class ControllerContact extends Controller
{
    public function index()
    {
            $this->generateView();
    }
    public function getDestinataire()
    {
        $type=$this->request->getSession()->getAttribute("user")['type'];
        if ($type=='rendez-vous')
            $destinataire=2;
        if ($type['type']=='Bug')
            $destinataire=3;
        if ($type['type']=='suggestion')
            $destinataire=3;

    }

    public function Message()
    {
        $contenu=$this->request->getSession()->getAttribute("user")['message'];
        $status=0;
        $date= date('F h:i:s A');
        $idUser=$this->request->getSession()->getAttribute("user")['name'];
    }
}
