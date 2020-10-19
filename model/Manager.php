<?php

abstract class Manager   {

    private $db;

    protected function executeRequest($sql, $arg = null) {
        if($arg == null) {
            $results = $this->getDb()->query($sql);
        } else {
            $results = $this->getDb()->prepare($sql);
            $results->execute($arg);
        }
        return $results;
    }

    private function getDb()
    {
        if($this->db == null) {
            $this->db = new PDO('mysql:host=localhost:8889;dbname=test;charset=utf8', 'test', 'caf4LWc9atNhbn58');
        }
        return $this->db;
    }
}