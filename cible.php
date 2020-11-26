<?php  
echo $_POST['prenom'] . "tu portes bien ton nom gros con";
echo $_POST['message'];
echo $_POST['choix'];
?> 

        <?php
    if (isset($_POST['mdp']) AND $_POST['mdp'] ==  "kangourou") // Si le mot de passe est bon
    {
    // On affiche les codes
    ?>
        <h1>Voici les codes d'accès :</h1>
        <p><strong>CRD5-GTFT-CK65-JOPM-V29N-24G1-HH28-LLFV</strong></p>   
        
        <p>
        Cette page est réservée au personnel de la NASA. N'oubliez pas de la visiter régulièrement car les codes d'accès sont changés toutes les semaines.<br />
        La NASA vous remercie de votre visite.
        </p>
        <?php
    }
    else // Sinon, on affiche un message d'erreur
    {
        echo '<p>Mot de passe incorrect</p>';
    }
    ?>
