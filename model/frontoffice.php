<?php

function getUserByPseudo($pseudo): array
    {
        $db = dbConnect();

        $response = $db->query("SELECT pseudo, password FROM users WHERE pseudo='".$pseudo."'");

        return $response->fetch();
    }

function insertUser($pseudo, $password)
{
    $db = dbConnect();

    $req = $db->prepare('INSERT INTO users (pseudo, password, plain_password) VALUES (?, ?, ?)');
    $req->execute(array($_POST['pseudo'], password_hash($_POST['password'], PASSWORD_DEFAULT), $_POST['password']));

    return null;
}

function dbConnect()
    {
        return new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'test', 'caf4LWc9atNhbn58');
    }

