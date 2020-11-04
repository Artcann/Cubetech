<?php

session_start();
require_once "Framework/Routeur.php";
$router = new Routeur();
$router->routeRequest();