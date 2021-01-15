<?php

$this->title = "Acceuil Admin Faq";
$this->style = "public/css/adminFaq.css";


?>
<div class="table-container">

    <h1><?php echo TXT_TITRE1_FAQ ;?></h1>

    <table class="table">
        <thead>
        <tr>
            <td><?php echo TXT_TD1_FAQ ;?></td>
            <td><?php echo TXT_TD2_FAQ ;?></td>
            <td><?php echo TXT_TD3_FAQ ;?></td>
        </tr>
        </thead>
        <tbody>
        <?php /** @noinspection PhpUndefinedVariableInspection */
        foreach($faq as $k => $v): ?>
            <tr>
                <td><?php echo MarkdownParser::render($v['titre']); ?></td>
                <td><?php echo '<a href="adminfaq/modification/'. $v['id'] .'" class=button>Modifier</a>'?></td>
                <td><?php echo '<a onclick="return confirm(\'Êtes vous sûrs de vouloir supprimer cette question ?\')"
                    href="adminfaq/delete/' . $v['id'] . '" class="button">Supprimer</a>' ?></td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
    <a href='adminfaq/ajout' class='button' id="add-button"><?php echo TXT_BT3_FAQ ;?></a>
</div>
