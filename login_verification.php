<?php
    session_start();

    try {
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'test', 'caf4LWc9atNhbn58');
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }

    $pseudo = $_POST["pseudo"];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $response = $bdd->query("SELECT pseudo, password FROM users WHERE pseudo='".$pseudo."'");
    try {
        $data = $response->fetch();
    } catch (Exception $e) {
        print_r($response->errorInfo());
    }

    if(empty($data)) {
        echo "Vous n'êtes pas inscrit";
    } elseif(password_verify($password, $data['password'])){
        echo "Mauvais mot de passe<br>";
    } else {
        echo $pseudo.", vous êtes connecté.<br>";
        $_SESSION['isLogged'] = true;
        echo "<a href='index.php'>Index</a>";
    }