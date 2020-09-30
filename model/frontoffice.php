<?php

function getUserByPseudo($pseudo): array
    {
        $db = dbConnect();

        $response = $db->query("SELECT pseudo, password FROM users WHERE pseudo='".$pseudo."'");

        return $response->fetch();
    }

    function dbConnect()
    {
        return new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'test', 'caf4LWc9atNhbn58');
    }