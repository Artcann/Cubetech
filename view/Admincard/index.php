<?php

$this->title = "Gestion Cartes";

?>
    <div class="table-container">

        <h1><?php echo TXT_TITRE1_CAR; ?></h1>

        <table class="table">
        <thead>
        <tr>
            <td><?php echo TXT_TD1_CAR; ?></td>
            <td><?php echo TXT_TD2_CAR; ?></td>
            <td><?php echo TXT_TD3_CAR; ?></td>
            <td><?php echo TXT_TD4_CAR; ?></td>
            <td><?php echo TXT_TD5_CAR; ?></td>
        </tr>
        </thead>
        <tbody>
        <?php /** @noinspection PhpUndefinedVariableInspection */
        foreach($data as $k => $v): ?>
            <tr>
                <td><?php echo $v['id']; ?></td>
                <td><?php echo $v['statut']; ?></td>
                <td><?php echo $v['date']; ?></td>
                <td><a href="admincard/modification" class="button"><?php echo TXT_TD4_CAR; ?></a></td>
                <td><?php echo '<a class="button" onclick="return confirm(\'Êtes vous sûrs de vouloir supprimer cet utilisateur ?\')"
                    href="Admincard/delete/' . $v['id'] . '">' . TXT_BT2_CGU . ' </a>' ?></td>
            </tr>
        <?php endforeach ?>
        </tbody>
        </table>
    </div>

