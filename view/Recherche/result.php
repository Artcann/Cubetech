<?php
$this->title='Page Recherche';
#$this->style='public/css/styleR.css';

<div class="table-container">

    <h1>Resultat de la recherche</h1>
<a href="recherche/">Retourner à la recherche</a>
    <table>
    <thead>
    <tr>
        <td>Avatar</td>
        <td>Nom</td>
        <td>Prenom</td>
        <td>Login</td>
        <td>Mail</td>
        <td>Date de naissance</td>
        <td>Nationalité</td>
        <td>Statut</td>
        <td>Grade</td>
        <td>Corps d'armée</td>
        <td>Caserne de rattachement</td>
        <td>Matricule</td>
        <td>Acceder aux resultats</td>
        <td>Envoyer un message</td>
    </tr>    
    </thead>

    <tbody>
    <?php
        foreach($data as $k => $v): ?>
            <tr>
                <td><img alt="" id="pict" src="public/avatars/<?php echo $v["login"];?>.jpg"></td>
                <td><?php echo $v['nom']; ?></td>
                <td><?php echo $v['prenom']; ?></td>
                <td><?php echo $v['login']; ?></td>
                <td><?php echo $v['mail']; ?></td>
                <td><?php echo $v['naissance']; ?></td>
                <td><?php echo $v['nationalite']; ?></td>
                <td><?php echo $v['statut']; ?></td>
                <td><?php echo $v['grade']; ?></td>
                <td><?php echo $v['corps']; ?></td>
                <td><?php echo $v['caserne']; ?></td>
                <td><?php echo $v['matricule']; ?></td>
                <td><a href="result/<?php echo $v["id"];?>"><img class="logo" src="public/images/graph.png"></a></td>
                <td><a href="chat/<?php echo $v["id"];?>"><img class="logo" src="public/images/mail.png" data-alt-src="public/images/mail2.png"></a></td>
            </tr>
        <?php endforeach ?>
    </tbody>
    </table>
</div>
