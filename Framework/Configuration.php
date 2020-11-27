<?php


/**
 * Class Configuration
 */
class Configuration
{
    private static $parameters;

    /**
     * @param $name
     * @param null $defaultValue
     * @return mixed|null
     * @throws Exception
     */
    public static function get($name, $defaultValue=null) {
        if(isset(self::getParameters()[$name])) {
            $value = self::getParameters()[$name];
        } else {
            $value = $defaultValue;
        }
        return $value;
    }

    /**
     * @return array|false
     * @throws Exception
     */
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