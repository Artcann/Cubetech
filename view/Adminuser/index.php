<?php

$this->title = "Acceuil Adminhome";
$this->style = "public/css/index.css";

?>

<table>
    <thead>
    <tr>
        <td>ID</td>
        <td>Login</td>
        <td>Statut</td>
        <td>Prenom</td>
        <td>Nom</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach($data as $k => $v): ?>
        <tr>
            <td><?php echo $v['id']; ?></td>
            <td><?php echo $v['login']; ?></td>
            <td><?php echo $v['statut']; ?></td>
            <td><?php echo $v['prenom']; ?></td>
            <td><?php echo $v['nom']; ?></td>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>