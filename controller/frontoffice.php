<?php
session_start();
require("model/frontoffice.php");

function login()
{
    require('view/frontoffice/login.php');

}

function loginVerification($pseudo, $password)
{
    $data = getUserByPseudo($pseudo);

    if(empty($data)) {
        echo "Vous n'êtes pas inscrit";
    } elseif(password_verify($password, $data['password'])){
        echo "Mauvais mot de passe<br>";
    } else {
        $_SESSION['isLogged'];
        home();
    }
}

function home()
{
    require('view/frontoffice/home.php');
}

function disconnect()
{
    $_SESSION = null;

    session_unset();

    session_destroy();

    header('Location: /');
}