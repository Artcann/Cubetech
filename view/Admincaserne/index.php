<?php

$this->title = "Gestion Casernes";
$this->style = "public/css/index.css";

?>

<table>
    <thead>
    <tr>
        <td>Ville</td>
        <td>Adresse</td>
        <td>Nombre de militaire</td>
        <td>Nombre en Opex</td>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach($data as $k => $v): ?>
        <tr>
            <td><?php echo $v['ville']; ?></td>
            <td><?php echo $v['addresse']; ?></td>
            <td><?php echo $v['nbMilitaire']; ?></td>
            <td><?php echo $v['nbOpex']; ?></td>
            <td><a href="admincaserne/modification">Modifier</a></td>
            <td><?php echo '<a onclick="return confirm(\'Êtes vous sûrs de vouloir supprimer cet utilisateur ?\')"
                   href="admincard/delete/' . $v['id'] . '">'. TXT_BT2_CGU .'</a>' ?></td>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>