<?php // declaration d'une variable et hello world :)
    echo " hello world ";
    echo date(" h:i:s ");
    $age = 27;
    $passeport = true;
    ?>


<?php // création d'une instruction conditionnelle if/else

if ($age < 18)
{
    $autorisation = "Non";
}
elseif ($age >= 18 && $passeport)
{
    $autorisation = "Oui";
}
echo $autorisation;
?>

<?php // instruction switch case
$boobs = "B";
switch ($boobs){
    case "A":
        echo "trop mimi";
    break;
    case "B":
        echo "les miniseins wouiii";
    break;
    case "C":
        echo "oh boh c'est mignon ça";
    break;
}
?>

<?php // boucle for
for ($nombre_de_lignes = 1; $nombre_de_lignes <= 5; $nombre_de_lignes++)
{
    echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />';
}
?>

<?php // boucle while
$time = 0;
while ($time < 10){
    $time++;
    echo "le temps passe" . $time . '<br />';
}
?>

<?php
$noms = array('carole', 'gisele', 'valoche', 'bergamorte');
?>


<?php // array_test
$exs = array('Alizée_moustachue', 'La_grosse_Julie');
$rand_keys = array_rand($exs, 1);
$grossenulos = $rand_keys;
echo $exs[$rand_keys];
?>

<?php // talbeau associatif
$coordonnees = array(
    'prenom' => 'mathilde',
    'nom'    => 'Kopf',
    'age'    => 19,
    'adresse'=> 'metz');
echo $coordonnees['age'];
?>

<?php // création d'une fonction
function calculus($x){
    echo $x*$x;
}
calculus(4); // appelle 
?>

<?php // test d'include
include("issou.html");
?>


<form method="post" action="cible.php">
    <p> formulaire de ugo
    <input type="text" name="prenom" />
    <textarea name="message" rows="8" cols="45">
    Votre message ici.
    </textarea>
    <select name="choix">
    <option value="france">france</option>
    <option value="allemagne">allemagne</option>
    <option value="italie">italie</option>
    <option value="suede">suede</option>
    <input type="checkbox" name="case" id="case" /> <label for="case">Ma case à cocher</label>
    <input type="submit" name="Valider">
</select>
    </p>
</form>

<form action="cible_envoi.php" method="post" enctype="multipart/form-data">
        <p>
                Formulaire d'envoi de fichier :<br />
                <input type="file" name="monfichier" /><br />
                <input type="submit" value="Envoyer le fichier" />
        </p>
</form>

<form action="cible.php" method="post">
    <input type="password" name="mdp">
    <input type="submit" name="Valider">
</form>



<?php echo password_hash('issou', PASSWORD_DEFAULT) ?>







