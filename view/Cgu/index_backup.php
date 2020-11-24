<?php

$this->title = "CGU";
$this->style = "public/css/index.css";

$db = parse_ini_file("C:\wamp64\www\Cubetech\Configuration\dev.ini");

$user = $db['login'];
$pass = $db['mdp'];
$name = $db['dsn'];

try{
    $bdd = new PDO($name, $user, $pass);
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}



$text = $bdd->query('SELECT contenu, titre FROM cgu');


while ($donnees = $text->fetch())
{
    echo '<h2>'.$donnees['titre'].'</h2>';
    echo $donnees['contenu'] . '<br />';
}

$text->closeCursor();

?>