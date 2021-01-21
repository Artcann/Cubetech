<?php
require_once 'Framework/Controller.php';
require_once 'model/Notifications.php';
require_once 'controller/ControllerSecure.php';

class ControllerNotifications extends Controller
{
    private $notification;
    public function __construct()
    {
        $this->notification = new Notifications();
    }

    public function index()
    {
        $idUser = $this->session->getAttribute("user")['id'];
        $liste=$this->notification->getNotif($idUser);
        $this->generateView($liste);
    }
}


