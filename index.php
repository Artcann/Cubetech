<?php
require('controller/frontoffice.php');

try {
    if (isset($_GET['action'])) {
        if($_GET['action'] == 'login-verification') {
            $pseudo = $_POST['pseudo'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            loginVerification($pseudo, $password);
        } elseif($_GET['action'] == 'home') {
            home();
        } elseif($_GET['action'] == 'disconnect') {
            disconnect();
        } elseif($_GET['action'] == 'login') {
            login();
        }
    } else {
        login();
    }
} catch(Exception $e) {
    echo 'Erreur : '.$e->getMessage();
}