<?php


/**
 * Class Cookie
 */
class Cookie
{
    /**
     * @param $key
     * @param $value
     */
    public function setValue($key, $value) {
        setcookie($key, $value, time()+60*60*24*30, null, null, false, false);
    }

    /**
     * @param $key
     * @return mixed
     */
    public function getValue($key) {
        return $_COOKIE[$key];
    }

}