<?php

session_start();
require_once "Routeur.php";
$router = new Routeur();
$router->routerRequete();