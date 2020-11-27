<?php

/**
 * Class Session
 */
class Session
{
    public function __construct() {
        session_start();
    }

    public function destroy() {
        session_destroy();
    }

    /**
     * @param $name
     * @param $value
     */
    public function setAttribute($name, $value) {
        $_SESSION[$name] = $value;
    }

    /**
     * @param $name
     * @return bool
     */
    public function isAttributeSet($name) {
        return(isset($_SESSION[$name]) && $_SESSION[$name] != "");
    }

    /**
     * @param $name
     * @return mixed
     */
    public function getAttribute($name) {
//        if ($this->isAttributeSet($name)) {
//            return $_SESSION[$name];
//        } else {
//            throw new Exception("Attribut '$name' absent de la session");
//        }
        return $_SESSION[$name];
    }
}