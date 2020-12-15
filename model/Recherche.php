<?php
require("controller/ControllerRecherche.php");
?>

<?php
$CtrIdent="0";
$CtrNom="0";
$CtrPrenom="0";
$CtrAge="0";
$CtrCaserne="0";
$Ctrgrade="0";
$CtrNationalite="0";
$CtrCorp_m="0";
$CtrStatut="0";
$CtrMatricule="0";
$ctrlogin="0";


public function getUser()
{
	if(isset($_GET['identifiant'])){
		$identifiant=$_GET['identifiant'];
		$Val_1="WHERE identifiant="$identifiant; /*condition : à $Val_1 va être affectée la valeur contenue dans $identifiant*/
		$CtrIdent="1";}
	else
		{$CtrIdent="0";} 

	
	

	if(isset($_GET['nom'])){
		$nom=$_GET['nom'];
		if($CtrIdent=="1"){
			$Val_2="AND nom="$nom;} /*ici, à $Val_2 va être affectée la valeur contenue dans $nom, et à $Val_1 va être affectée la valeur contenue dans $identifiant*/
		else
			{$Val_1="WHERE nom"=$nom; /*ici, à $Val_1 va être affectée la valeur contenue dans $nom, et non plus dans $identifiant*/
			 $CtrNom="1";}
	}
	else
		{$CtrNom="0";}



	if(isset($_GET['prenom'])){
		$prenom=$_GET['prenom'];
		if(($CtrIdent=="1")||($CtrNom=="1")){
			$Val_3="AND prenom="$prenom;}
		else
			{$Val_1="WHERE prenom="$prenom;
			 $CtrPrenom="1";}
	}
	else
		{$CtrPrenom="0";}	




	if(isset($_GET['age'])){
		$age=$_GET['age'];
		if(($CtrIdent=="1")||($CtrNom=="1")||($CtrPrenom=="1")){
			$Val_4="AND naissance="$age;}
		else
			{$Val_1="WHERE naissance="$age;
			 $CtrAge="1";}
	}
	else
		{$CtrAge="0";}





	if(isset($_GET['grade'])){
		$grade=$_GET['grade'];
		if(($CtrIdent=="1")||($CtrNom=="1")||($CtrPrenom=="1")||($CtrAge=="1")){
			$Val_5="AND grade="$garde;}
		else
			{$Val_1="WHERE grade="$grade;
			 $Ctrgarde="1";}
	}
	else
		{$Ctrgarde="0";}





	if(isset($_GET['caserne'])){
		$caserne=$_GET['caserne'];
		if(($CtrIdent=="1")||($CtrNom=="1")||($CtrPrenom=="1")||($CtrAge=="1")||($Ctrgarde=="1")){
			$Val_6="AND caserne="$caserne;}
		else
			{$Val_1="WHERE caserne="$caserne;
			 $CtrCaserne="1";}
	}
	else
		{$CtrCaserne="0";}






	if(isset($_GET['nationalite'])){
		$nationalite=$_GET['nationalite'];
		if(($CtrIdent=="1")||($CtrNom=="1")||($CtrPrenom=="1")||($CtrAge=="1")||($Ctrgarde=="1")||($CtrCaserne=="1")){
			$Val_7="AND nationalite="$nationalite;}
		else
			{$Val_1="WHERE nationalite="$nationalite;
			 $CtrNationalite="1";}
	}
	else
		{$CtrNationalite="0";}





	if(isset($_GET['corps_m'])){
		$Corps_m=$_GET['corps_m'];
		if(($CtrIdent=="1")||($CtrNom=="1")||($CtrPrenom=="1")||($CtrAge=="1")||($Ctrgarde=="1")||($CtrCaserne=="1")||($CtrNationalite=="1")){
			$Val_8=" AND corps="$corps_m;}
		else
			{$Val_1=" WHERE corps="$corps_m;
			 $CtrCorp_m="1";}
	}	
	else
		{$CtrCorp_m="0";}






	if(isset($_GET['statut'])){
		$statut=$_GET['statut'];
		if(($CtrIdent=="1")||($CtrNom=="1")||($CtrPrenom=="1")||($CtrAge=="1")||($Ctrgarde=="1")||($CtrCaserne=="1")||($CtrNationalite=="1")||($CtrCorp_m=="1")){
			$Val_9=" AND statut="$statut;}
		else
			{$Val_1=" WHERE statut="$statut;
			 $CtrStatut="1";}
	}
	else
		{$CtrStatut="0";}





	if(isset($_GET['matricule'])){
		$matricule=$_GET['matricule'];
		if(($CtrIdent=="1")||($CtrNom=="1")||($CtrPrenom=="1")||($CtrAge=="1")||($Ctrgarde=="1")||($CtrCaserne=="1")||($CtrNationalite=="1")||($CtrCorp_m=="1")||($CtrStatut=="1")){
			$Val_10=" AND matricule="$matricule;}
		else
			{$Val_1=" WHERE matricule="$matricule;
			 $CtrMatricule="1";}
	}
	else
		{$CtrMatricule="0";}






	if(isset($_GET['login'])){
		$login=$_GET['login'];
		if(($CtrIdent=="1")||($CtrNom=="1")||($CtrPrenom=="1")||($CtrAge=="1")||($Ctrgarde=="1")||($CtrCaserne=="1")||($CtrNationalite=="1")||($CtrCorp_m=="1")||($CtrStatut=="1")||($CtrMatricule=="1")){
			$Val_11=" AND login="$login;}
		else
			{$Val_1=" WHERE login="$login;
			 $ctrlogin="1";}
	}
	else
		{$ctrlogin="0";}





/*Cas où aucun des champs n'est renseigné*/
if(($CtrNom=="0")&&($CtrIdent=="0")&&($CtrPrenom=="0")&&($CtrAge=="0")&&($Ctrgarde=="0")&&($CtrNationalite=="0")&&($CtrCaserne=="0")&&($CtrCorp_m=="0")&&($CtrStatut=="0")&&($CtrMatricule=="0") &&($ctrlogin=="0"))
	{echo 'Veuillez renseigner au moins 1 champ !';}
else{
	$compteur=0;
	$ctrtable="0";
	$sql=$db->query("SELECT id,nom,prenom,login,mail,naissance,nationalite,statut,grade,corps,caserne,matricule FROM user WHERE (nom LIKE'"$_GET["nom"]".%' XOR prenom LIKE'"$_GET["prenom"]".%')
					ORDER BY nom ASC");
	$resultat = mysqli_query($db,$sql) or die("Aucun résultat");}	
}
?>
