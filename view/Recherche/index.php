/*vue résultat*/
<?php
$this->title='Page Recherche';
$this->style='public/css/styleR.css';
/*$this->script='recherche.js';*/
?>


<table>
<thead>
<tr>
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
</tr>    
</thead>

<tbody>
<?php
    foreach($dataArr as $k => $v): ?>
        <tr>
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
        </tr>
    <?php endforeach ?>
    <?php if(empty($id,$nom,$prenom,$login,$naissance,$grade,$nationalite,$statut,$matricule,$corps,$caserne)) {
        echo'<p>"Veuillez renseigner au moins 1 champ"</p>';}?>
    <?php if($reponse==0) {echo '<p>Désolé, votre recherche n\'a rien donné</p>';}?>
</tbody>
</table>