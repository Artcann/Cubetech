<?php

require_once 'Configuration.php';
require_once 'MarkdownParser.php';
require_once 'Session.php';

/**
 * Class View
 */
class View
{
    private $file;

    private $title;

    private $style;

    private $script;

    /**
     * View constructor.
     * @param $action
     * @param string $controller
     */
    public function __construct($action, $controller = "")
    {
        $fichier = "view/";
        if($controller != "") {
            $fichier = $fichier . $controller ."/";
        }
        $this->file = $fichier . $action . ".php";
    }

    /**
     * @param null $data
     * @throws Exception
     */
    public function generate($data = null, $lang) {
        $content = $this->generateFile($this->file, $data);

        $root = Configuration::get("racineWeb", "/");

        if($lang == "fr") {
            echo 'test';
            $view = $this->generateFile("view/template.php", array('title' => $this->title, 'content' => $content,
            'racineWeb' => $root, 'style' => $this->style, 'script' => $this->script), $lang);
        } else if($lang == 'en') {    
            $view = $this->generateFile("view/template-en.php", array('title' => $this->title, 'content' => $content,
            'racineWeb' => $root, 'style' => $this->style, 'script' => $this->script), $lang);
       }

        echo $view;
    }

    /**
     * @param $file
     * @param $data
     * @return false|string
     * @throws Exception
     */
    private function generateFile($file, $data, $lang=null) {
        if (file_exists($file)) {
            if($data != null) {
                extract($data);
            }

            ob_start();

            var_dump($lang);

            if ($lang == "fr") {
                include_once('Langues/lang-fr.php');
            }
            else if ($lang == "en") {
                echo 'test2';
                include_once('Langues/lang-en.php');
            }
            
            require($file);

            return ob_get_clean();
        }
        else {
            throw new Exception("Fichier ".$file." introuvable");
        }
    }

    private function sanitize($value) {
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8', false);
    }
}