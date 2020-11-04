<?php
require_once "Request.php";
require_once "View.php";

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
            return $controller;
        } else {
            throw new Exception("Fichier '$fileController' introuvable");
        }
    }

    private function createAction(Request $request) {
        $action = "index";
        if($request->isParameterSet('action')) {
            $action = $request->getParameter('action');
        }
        return $action;
    }

    private function handleError(Exception $exception) {
        echo $exception->getMessage();
    }

}