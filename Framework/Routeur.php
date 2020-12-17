<?php
require_once "Request.php";
require_once "View.php";

/**
 * Class Routeur
 */
class Routeur
{

    public function routeRequest() {
        try {
            $request = new Request(array_merge($_GET, $_POST));

            $controller = $this->createController($request);
            $action = $this->createAction($request);

            $controller->executeAction($action);
        } catch (Exception $e) {
            $this->handleError($e);
        }
    }

    /**
     * @param Request $request
     * @return mixed
     * @throws Exception
     */
    private function createController(Request $request)
    {
        $controller = "Home";
        if ($request->isParameterSet('controller')) {
            $controller = $request->getParameter('controller');

            $controller = ucfirst(strtolower($controller));
        }

        $classController = "Controller" . $controller;
        $fileController = "Controller/" . $classController . ".php";
        if (file_exists($fileController)) {
            require($fileController);
            $controller = new $classController;
            $controller->setRequest($request);
            $controller->setSession(new Session());
            return $controller;
        } else {
            throw new Exception("Fichier '$fileController' introuvable");
        }
    }

    /**
     * @param Request $request
     * @return mixed|string
     * @throws Exception
     */
    private function createAction(Request $request) {
        $action = "index";
        if($request->isParameterSet('action')) {
            $action = $request->getParameter('action');
        }
        return $action;
    }

    /**
     * @param Exception $exception
     */
    private function handleError(Exception $exception) {
        echo $exception->getMessage();
    }

}
