<?php
class Manager {

    protected function dbConnect()
    {
        return new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'test', 'caf4LWc9atNhbn58');
    }

}