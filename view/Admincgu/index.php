<?php
$this->title = "Gestion CGU";
?>

<div class="table-container">

    <h1>Gestion des CGU</h1>

    <table class="table">
        <thead>
        <tr>
            <td>Titre de la partie</td>
            <td>Modifer la partie</td>
            <td>Supprimer la partie</td>
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
    <a href='adminfaq/ajout' class='button' id="add-button">Ajouter une question</a>
</div>