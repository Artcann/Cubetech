<?php
include ('ConnexionRecherche.php');/*connexion à la db*/
include('Recherche.php'); /*le modèle*/
include('view/viewRecherche.php'); /*la vue*/


class ControllerRecherche extends Controller


public function getUser()
if (isset($_GET['identifiant'])||$_GET['nom']||$_GET['prenom']||$_GET['login']||$_GET['naissance']||$_GET['mail']||$_GET['statut']||$_GET['grade']||$_GET['corps']||$_GET['matricule']||$_GET['nationalite'])) 
{
    $resultat->query($db,$sql);
    $row=mysqli_fetch_array($resultat);
	foreach($row as $row)
		{$this->generateView($row);}
}
else 
{echo 'Veuillez renseigner au moins 1 champ !';}



include('DeconnexionRecherche.php');/*déconexion à la db*/

?>