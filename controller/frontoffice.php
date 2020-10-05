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
        $_SESSION['isLogged'] = true;
        home();
    }
}

function registerUser() {
    require('view/frontoffice/register.php');
}

function registerVerification($pseudo, $password, $password2) {
    if($_POST['password'] == $_POST['password2']) {
        insertUser($pseudo, $password);
        echo "<h1>Registration Complete</h1>";
        require('view/frontoffice/login.php');
    } else {
        require('view/frontoffice/register.php');
        echo "<h1>The passwords are not the same</h1>";
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