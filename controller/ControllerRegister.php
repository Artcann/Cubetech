<?php

require_once 'model/User.php';
require_once 'Framework/Controller.php';

/**
 * Class ControllerRegister
 */
class ControllerRegister extends Controller
{
    private $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function index() {
        
        $this->generateView(array());
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

        $test = "nada";

        if($this->request->isParameterSet('mail')) {

            $to = "art.cann@orange.fr";
            $subject = "TESTING";
            $message = "Bonjour, votre identifiant de connexion est : " . $login . ".";
            $headers = "From: arthur.cann.29@gmail.com" . "\r\n" .
                "MIME-Version: 1.0" . "\r\n" .
                "Content-type: text/html; charset=utf8";
            if(mail($to, $subject, $message, $headers)) {
                $test = 'mail sent';
            } else {
                $test = 'nope';
            }
        }
        $lang = $this->session->getAttribute('user')['nationalite'];
        $this->generateView(array("login" => $login, "test" => $test, "lang" => $lang));
    }
}