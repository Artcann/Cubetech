<?php

require_once 'Request.php';
require_once 'Session.php';
require_once 'View.php';

/**
 * Class Controller
 */
abstract class Controller
{
    private $action;

    protected $request;

    protected $session;


    /**
     * @param Request $request
     */
    public function setRequest(Request $request) {
        $this->request = $request;
    }

    /**
     * @param Session $session
     */
    public function setSession(Session $session) {
        $this->session = $session;
    }

    /**
     * @param $action
     * @throws Exception
     */
    public function executeAction($action)
    {
        if (method_exists($this, $action)) {
            $this->action = $action;
            $this->{$this->action}();
        } else {
            $classController = get_class($this);
            throw new Exception("Action '$action' non définie dans la classe '$classController'");
        }
    }

    public abstract function index();

    /**
     * @param array $dataView
     * @throws Exception
     */
    protected function generateView($dataView = array()) {
        $classController = get_class($this);
        $controller = str_replace("Controller", "", $classController);

        if(!$this->session->isAttributeSet('lang')) {
            echo 'test';
            $this->session->setAttribute('lang', 'fr');
        }

        $view = new View($this->action, $controller);
        $view->generate($dataView, $this->session->getAttribute('lang'));
    }

    /**
     * @param $controller
     * @param null $action
     * @throws Exception
     */
    protected function redirect($controller, $action = null)
    {
        $racineWeb = Configuration::get("racineWeb", "/");
        // Redirection vers l'URL /racine_site/controleur/action
        header("Location:" . $racineWeb . $controller . "/" . $action);
    }

    public function disconnect()
    {
        $this->session->destroy();

        header('Location: /');
    }
}


