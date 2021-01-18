<?php

$this->title = "Rhtest";

?>

<div class="table-container">

    <h1><?php echo 'Gestion des rendez-vous' ;?></h1>

  <table class="table">
        <thead>
        <tr>
            <td><?php echo 'Date' ;?></td>
            <td><?php echo 'Heure' ;?></td>
            <td><?php echo 'Patient' ;?></td>
            <td><?php echo 'Rh' ;?></td>
            <td><?php echo 'Modifier' ;?></td>
            <td><?php echo 'Supprimer' ;?></td>
        </tr>
        </thead>
        <tbody>
        <?php /** @noinspection PhpUndefinedVariableInspection */
        foreach($test as $k => $v): ?>
            <tr>
                <td><?php echo $v['date'];?></td>
                <td><?php echo $v['heure'];?></td>
                <td><?php echo $v['nom'] . ' ' .$v['prenom'];?></td>
                <td><?php echo $user[$v['idRh']]['nom'] . ' ' . $user[$v['idRh']]['prenom'];?></td>
                <td><?php echo '<a href="rhtest/modification/'. $v['id'] .'" class=button>Modifier</a>'?></td>
                <td><?php echo '<a onclick="return confirm(\'Êtes vous sûrs de vouloir supprimer cette question ?\')"
                    href="Rhtest/delete/' . $v['id'] . '" class="button">Supprimer</a>' ?></td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
    
</div>


