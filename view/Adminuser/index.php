<?php

$this->title = "Gestion Utilisateurs";

?>

<div class="table-container">

    <h1>Gestion des utilisateurs</h1>

    <table class="table">
        <thead>
        <tr>
            <td>ID</td>
            <td>Login</td>
            <td>Statut</td>
            <td>Prenom</td>
            <td>Nom</td>
            <td>Modifier l'utilisateur</td>
            <td>Supprimer l'utilisateur</td>
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
                <td><a href="adminuser/modification" class=button>Modifier</a></td>
                <td><?php echo '<a onclick="return confirm(\'Êtes vous sûrs de vouloir supprimer cet utilisateur ?\')"
                    href="adminuser/delete/' . $v['id'] . '" class="button">Supprimer</a>' ?></td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
<div>