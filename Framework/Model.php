<?php

require_once("Configuration.php");

/**
 * Class Model
 */
abstract class Model   {

    private static $db;
    
    /**
     * @param $sql
     * @param null $arg
     * @return bool|PDOStatement
     */

    protected function executeRequest($sql, $arg = null) {
        if($arg == null) {
            $results = self::getDb()->query($sql);
        } else {
            $results = self::getDb()->prepare($sql);
            $results->execute($arg);
        }
        return $results;
    }


    /**
     * @return PDO
     * @throws Exception
     * @throws Exception
     */

    private static function getDb()
    {
        if(self::$db == null) {
            $dsn = Configuration::get("dsn");
            $login = Configuration::get("login");
            $mdp = Configuration::get("mdp");

            self::$db = new PDO($dsn, $login, $mdp, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        return self::$db;
    }
}