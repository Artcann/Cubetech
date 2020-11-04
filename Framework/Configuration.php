<?php


class Configuration
{
    private static $parameters;

    public static function get($name, $defaultValue=null) {
        if(isset(self::getParameters()[$name])) {
            $value = self::getParameters()[$name];
        } else {
            $value = $defaultValue;
        }
        return $value;
    }

    private static function getParameters() {
        if(self::$parameters == null) {
            $filePath = "Configuration/dev.ini";
            if(!file_exists($filePath)) {
                throw new Exception("Aucun fichier de configuration trouvé");
            } else {
                self::$parameters = parse_ini_file($filePath);
            }
        }
        return self::$parameters;
    }
}