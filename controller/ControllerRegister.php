<?php

require_once 'model/User.php';
require_once 'Framework/Controller.php';

class ControllerRegister extends Controller
{
    private $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function index() {
        $this->generateView();
    }

    public function register() {
        $fields = array("nom", "prenom", "date", "grade", "nationalite", "caserne", "corps", "statut",
            "matricule", "mail");
        $values = array();
        foreach($fields as $field) {
            if($this->request->isParameterSet($field)) array_push($values, $this->request->getParameter($field));
            else array_push($values, NULL);
        }
        if($this->request->isParameterSet('password')) array_push($values,
            password_hash($this->request->getParameter('password'), PASSWORD_DEFAULT));

        $login = strtolower(substr($values[1], 0, 2).substr($values[0], 0, 2).
        explode("-", $values[2])[2].explode("-", $values[2])[1]);

        array_push($values, $login);
        $this->user->insertUser($values);

        $this->generateView(array("login" => $login));
    }
}