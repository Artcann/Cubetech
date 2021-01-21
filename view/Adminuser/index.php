<?php

$this->title = "Gestion Utilisateurs";

?>


<div class="table-container">

    <h1><?php echo TXT_TITRE_AU ;?></h1>

    <table class="table">
        <thead>
        <tr>
            <td><?php echo TXT_TD1_AU ;?></td>
            <td><?php echo TXT_TD2_AU ;?></td>
            <td><?php echo TXT_TD3_AU ;?></td>
            <td><?php echo TXT_TD4_AU ;?></td>
            <td><?php echo TXT_TD5_AU ;?></td>
            <td><?php echo TXT_TD6_AU ;?></td>
            <td><?php echo TXT_TD7_AU ;?></td>
        </tr>
        </thead>
        <tbody>
        <?php /** @noinspection PhpUndefinedVariableInspection */
        foreach($data as $k => $v): ?>
            <tr>
                <td><?php echo $v['id']; ?></td>
                <td><?php echo $v['login']; ?></td>
                <td><?php echo $v['statut']; ?></td>
                <td><?php echo $v['prenom']; ?></td>
                <td><?php echo $v['nom']; ?></td>
                <td><a href="adminuser/modification" class=button><?php echo TXT_BT1_AU ;?></a></td>
                <td><?php echo '<a onclick="return confirm(\'Êtes vous sûrs de vouloir supprimer cet utilisateur ?\')"
                    href="adminuser/delete/' . $v['id'] . '" class="button">Supprimer</a>'?></td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</div>