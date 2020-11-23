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
        <?php foreach($data as $k => $v)
        ?>
    </tbody>
</table>