<?php

require_once 'Configuration.php';
require_once 'MarkdownParser.php';

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
    public function generate($data = null) {
        $content = $this->generateFile($this->file, $data);

        $root = Configuration::get("racineWeb", "/");


        if ($lang == "Français") {
             $view = $this->generateFile("view/template.php", array('title' => $this->title, 'content' => $content,
            'racineWeb' => $root, 'style' => $this->style, 'script' => $this->script));
        }
        else if ($lang !== "Français") {
             $view = $this->generateFile("view/template-en.php", array('title' => $this->title, 'content' => $content,
            'racineWeb' => $root, 'style' => $this->style, 'script' => $this->script));
        } 

        echo $view;
    }

    /**
     * @param $file
     * @param $data
     * @return false|string
     * @throws Exception
     */
    private function generateFile($file, $data) {
        if (file_exists($file)) {
            if($data != null) {
                extract($data);
            }

            ob_start();

            if ($lang == "Français") {
                include('Langues/lang-fr.php');
            }
            else if ($lang !== "Français") {
                include('Langues/lang-en.php');
            } 
            
            require($file);

            return ob_get_clean();
        }
        else {
            throw new Exception("Fichier ".$file." introuvable");
        }
    }

    private function markdownToHtml($markdownText) {

    }  

    private function sanitize($value) {
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8', false);
    }
}