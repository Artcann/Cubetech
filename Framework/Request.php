<?php
require_once 'Session.php';
require_once 'Cookie.php';

class Request
{
    private $parameters;

    private $session;

    private $cookie;

    public function __construct($parameters) {
        $this->parameters = $parameters;
        $this->session = new Session();
        $this->cookie = new Cookie();
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

    public function getCookies() {
        return $this->cookie;
    }
}