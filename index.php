<?php
    session_start();

    if(empty($_SESSION["isLogged"])) {
        header('Location: login.php');
    }

    try {
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'test', 'caf4LWc9atNhbn58');
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }


    $response = $bdd->query('SELECT pseudo FROM users');

    while ($data = $response->fetch())
    {
        echo '<p><strong>'.htmlspecialchars($data['pseudo']).'</strong></p>';
    }

