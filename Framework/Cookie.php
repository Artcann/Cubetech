<?php


class Cookie
{
    public function setValue($key, $value) {
        setcookie($key, $value, time()+60*60*24*30, null, null, false, false);
    }

    public function getValue($key) {
        return $_COOKIE[$key];
    }

}