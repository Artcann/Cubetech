<?php


class Request
{
    private $parameters;

    public function __construct($parameters) {
        $this->parameters = $parameters;
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
}