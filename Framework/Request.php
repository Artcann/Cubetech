<?php
require_once 'Session.php';

class Request
{
    private $parameters;

    private $session;

    public function __construct($parameters) {
        $this->parameters = $parameters;
        $this->session = new Session();
    }

    public function isParameterSet($name) {
        return (isset($this->parameters[$name]) && $this->parameters[$name] != "");
    }

    public function getParameter($name) {
        if ($this->isParameterSet($name)) {
            return $this->parameters[$name];
        } else {
            throw new Exception("Paramètre '$name' absent de la requête");
        }
    }

    public function getSession() {
        return $this->session;
    }
}