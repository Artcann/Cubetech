<?php

$this->title = "Rhtest | Cubetech";

?>

<div class="table-container">

    <h1><?php echo TXT_TITRE1_TEST ;?></h1>

  <table class="table">
        <thead>
        <tr>
            <td><?php echo TXT_TD1_TEST ;?></td>
            <td><?php echo TXT_TD2_TEST ;?></td>
            <td><?php echo TXT_TD3_TEST ;?></td>
            <td><?php echo TXT_TD4_TEST ;?></td>
            <td><?php echo TXT_TD5_TEST ;?></td>
            <td><?php echo TXT_TD6_TEST ;?></td>
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
                <td><?php echo '<a href="rhtest/modification/'. $v['id'] .'" class=button>'. TXT_TD5_TEST . '</a>'?></td>
                <td><?php echo '<a onclick="return confirm(\'Êtes vous sûrs de vouloir supprimer cette question ?\')"
                    href="Rhtest/delete/' . $v['id'] . '" class="button">' . TXT_TD6_TEST . '</a>' ?></td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
    
</div>


