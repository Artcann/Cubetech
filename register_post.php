<?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'test', 'caf4LWc9atNhbn58');
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }

    if(isset($_POST['pseudo']) && isset($_POST['password']) && isset($_POST['password2'])) {
        if($_POST['password'] == $_POST['password2']) {
            $req = $bdd->prepare('INSERT INTO users (pseudo, password, plain_password) VALUES (?, ?, ?)');
            $req->execute(array($_POST['pseudo'], password_hash($_POST['password'], PASSWORD_DEFAULT), $_POST['password']));
        }
    }

    header('Location: index.php');


