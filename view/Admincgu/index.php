<?php
$this->title = "Gestion CGU";
?>

<div class="table-container">

    <h1><?php echo TXT_TITRE1_CGU; ?></h1>

    <table class="table">
        <thead>
        <tr>
            <td><?php echo TXT_TD1_CGU; ?></td>
            <td><?php echo TXT_TD2_CGU; ?></td>
            <td><?php echo TXT_TD3_CGU; ?></td>
        </tr>
        </thead>
        <tbody>
        <?php /** @noinspection PhpUndefinedVariableInspection */
        foreach($data as $k => $v): ?>
            <tr>
                <td><?php echo MarkdownParser::render($v['titre']); ?></td>
                <td><?php echo '<a href="admincgu/modification/'. $v['id'] .'" class=button>Modifier</a>'?></td>
                <td><?php echo '<a onclick="return confirm(\'Êtes vous sûrs de vouloir supprimer cette question ?\')"
                    href="admincgu/delete/' . $v['id'] . '" class="button">Supprimer</a>' ?></td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
    <a href='adminfaq/ajout' class='button' id="add-button"><?php echo TXT_BT3_CGU; ?></a>
</div>