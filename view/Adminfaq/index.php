<?php

$this->title = "Acceuil Admin Faq";
$this->style = "public/css/adminFaq.css";


?>
<div class="tableau1">
    <table id="questionTable">
        <thead>
        <tr>
            <td>Titre de la question</td>
            <td>Modifer la question</td>
            <td>Supprimer la question</td>
        </tr>
        </thead>
        <tbody>
        <?php /** @noinspection PhpUndefinedVariableInspection */
        foreach($faq as $k => $v): ?>
            <tr>
                <td><?php echo $v['titre']; ?></td>
                <td><?php echo '<a href="adminfaq/modification'. $v['id'] .'" class=button>Modifier</a>'?></td>
                <td><?php echo '<a onclick="return confirm(\'Êtes vous sûrs de vouloir supprimer cet utilisateur ?\')"
                    href="adminfaq/delete/' . $v['id'] . '" class="button">Supprimer</a>' ?></td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</div>
<a href='admingfaq/ajout' class='add-button'>Ajouter une question</a>
