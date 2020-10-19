<?php
require('controller/frontoffice.php');
require('controller/ControllerLogin.php');

try {
    if (isset($_GET['action'])) {
        if($_GET['action'] == 'login-verification') {
            $pseudo = $_POST['pseudo'];
            $password = $_POST['password'];

            loginVerification($pseudo, $password);
        } elseif($_GET['action'] == 'home') {
            home();
        } elseif($_GET['action'] == 'disconnect') {
            disconnect();
        } elseif ($_GET['action'] == 'register-verification') {
            $pseudo = $_POST['pseudo'];
            $password = $_POST['password'];
            $password2 = $_POST['password2'];
            registerVerification($pseudo, $password);
        } elseif ($_GET['action'] == 'register') {
            registerUser();
        }
    } else {
        $login = new ControllerLogin();
        $login->login();
    }
} catch(Exception $e) {
    echo 'Erreur : '.$e->getMessage();
}