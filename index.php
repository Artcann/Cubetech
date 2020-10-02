<?php
require('controller/frontoffice.php');

try {
    if (isset($_GET['action'])) {
        if($_GET['action'] == 'login-verification') {
            if (isset($_POST['pseudo']) && isset($_POST['password'])) {
                $pseudo = $_POST['pseudo'];
                $password = $_POST['password'];

                loginVerification($pseudo, $password);
            } else {
                login();
            }
        } elseif($_GET['action'] == 'home') {
            home();
        } elseif($_GET['action'] == 'disconnect') {
            disconnect();
        } elseif($_GET['action'] == 'login') {
            login();
        } elseif ($_GET['action'] == 'register-verification') {
            if (isset($_POST['pseudo']) && isset($_POST['password']) && isset($_POST['password2'])) {
                $pseudo = $_POST['pseudo'];
                $password = $_POST['password'];
                $password2 = $_POST['password2'];
                registerVerification($pseudo, $password, $password2);
            } else {
                registerUser();
            }
        } elseif ($_GET['action'] == 'register') {
            registerUser();
        }
    } else {
        login();
    }
} catch(Exception $e) {
    echo 'Erreur : '.$e->getMessage();
}