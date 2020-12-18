<?php
require_once 'Session.php';
require_once 'Cookie.php';

/**
 * Class Request
 */
class Request
{
    private $parameters;

    //private $session;

    private $cookie;

    /**
     * Request constructor.
     * @param $parameters
     */
    public function __construct($parameters) {
        $this->parameters = $parameters;
        //$this->session = new Session();
        $this->cookie = new Cookie();
    }

    /**
     * @param $name
     * @return bool
     */
    public function isParameterSet($name) {
        return (isset($this->parameters[$name]) && $this->parameters[$name] != "");
    }

    /**
     * @param $name
     * @return mixed
     * @throws Exception
     */
    public function getParameter($name) {
        if ($this->isParameterSet($name)) {
            return $this->parameters[$name];
        } else {
            throw new Exception("Paramètre '$name' absent de la requête");
        }
    }

    /**
     * @return Session
     */
//    public function getSession() {
//        return $this->session;
//    }

    /**
     * @return Cookie
     */
    public function getCookies() {
        return $this->cookie;
    }
}