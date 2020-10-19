<?php

require_once "Routeur.php";
session_start();
$_SESSION["isLogged"] = false;
$router = new Routeur();
$router->routerRequete();