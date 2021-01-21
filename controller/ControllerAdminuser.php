<?php

require_once "Controller/ControllerAdmin.php";
require_once 'model/user.php';

/**
 * Class ControllerAdminuser
 */
class ControllerAdminuser extends ControllerAdmin {

    private $user;

    function __construct()
    {
        $this->user = new User();
    }

    public function index() {
        $data = $this->user->getAllUsers();
        $this->generateView(array("data" => $data));
    }

    public function register() {
        $this->redirect('register');
    }

    public function delete() {
        $this->user->deleteUserById($this->request->getParameter('id'));
        $this->redirect('adminuser');
    }

    public function json() {
        //header('Content-Type: application/json');

        $this->generateView(array("data" => $this->user->getAllUsersRaw()));
    }
    public function modification(){
      $idUser = $this->request->getParameter('id');
      $this->generateView(array("idUser"=>$idUser));

    }
    public function modifyDone(){
      $fields = array("id", "login", "password", "statut", "prenom", "nom", "matricule", "grade",
          "naissance", "nationalite","caserne","corps","mail");

      $values = array();
      $idUser = $this->request->getParameter('idUser');
      $data = $this->user->getUserByLogin($idUser);


        foreach($fields as $field) {

          if($this->request->isParameterSet($field)) {

            array_push($values, $this->request->getParameter($field));
          }
          else{
            array_push($values,$data[$field]);
          }}

        if($this->request->isParameterSet('password')) array_push($values,
            password_hash($this->request->getParameter('password'), PASSWORD_DEFAULT));
        else{
          array_push($values,$data['password']);
        }
        array_push($values, $idUser);
      $this->user->modifyUserById($values);
      $this->generateView(array("idUser"=>$idUser));
    }

}
