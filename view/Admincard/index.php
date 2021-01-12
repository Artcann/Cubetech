<?php

$this->title = "Gestion Cartes";
$this->style = "public/css/index.css";

?>

    <table>
    <thead>
    <tr>
        <td>ID</td>
        <td>Statut</td>
        <td>Date mise en service</td>
    </tr>
    </thead>
    <tbody>
    <?php /** @noinspection PhpUndefinedVariableInspection */
    foreach($data as $k => $v): ?>
        <tr>
            <td><?php echo $v['id']; ?></td>
            <td><?php echo $v['statut']; ?></td>
            <td><?php echo $v['date']; ?></td>
            <td><a href="admincard/modification">Modifier</a></td>
            <td><?php echo '<a onclick="return confirm(\'Êtes vous sûrs de vouloir supprimer cet utilisateur ?\')"
                   href="Admincard/delete/' . $v['id'] . '">Supprimer</a>' ?></td>
        </tr>
    <?php endforeach ?>
    </tbody>
    </table>
