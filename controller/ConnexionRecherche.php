<?php
/*Fonction de connexion à la dB*/
function dbConnect()
try
{
	$db = new PDO('http://192.168.1.73/phpmyadmin/', 'app2021', 'app', '7XGmcyTXcybFR73R');
}
	if(!$db) 
	{
		echo 'Impossible de se connecter au serveur, veuillez recommencer ou bien <a href="#">reporter un bug</a>';
    exit;
	}
