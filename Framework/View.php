<?php

require_once 'Configuration.php';

class View
{
    private $file;

    private $title;

    private $style;

    private $script;

    public function __construct($action, $controller = "")
    {
        $fichier = "view/";
        if($controller != "") {
            $fichier = $fichier . $controller ."/";
        }
        $this->file = $fichier . $action . ".php";
    }

    public function generate($data = null) {
        $content = $this->generateFile($this->file, $data);

        $root = Configuration::get("racineWeb", "/");

        $view = $this->generateFile("view/template.php", array('title' => $this->title, 'content' => $content,
            'racineWeb' => $root, 'style' => $this->style, 'script' => $this->script));

        echo $view;
    }

    private function generateFile($file, $data) {
        if (file_exists($file)) {
            if($data != null) {
                extract($data);
            }

            ob_start();

            require($file);

            return ob_get_clean();
        }
        else {
            throw new Exception("Fichier ".$file." introuvable");
        }
    }
}