<?php

$this->title = "Forum";

$this->style = "public/css/forum.css";
$this->script = "public/js/forum.js"


?>
<br>
    <h2>Liste des catégories :</h2><br><br>
<?php


/*foreach ($data['totalDesc'] as $datum){
    echo '<p><strong>'.$datum['name'].'</strong>'.' ('.$datum['total_topics'].')</p>';
    echo '<p>'.$datum['description'].'</p><br>';
}*/

/*foreach ($data['totalDesc'] as $datum){
    echo '<p><strong><a href="forum/topic/'.$datum['category_id'].'">'.$datum['name'].'</strong>'.' ('.$datum['total_topics'].')</a></p>';
    echo '<p>'.$datum['description'].'</p><br>';
}*/
?>

<table class="table">
	    <thead>
	    <tr>
	        <td>Catégorie</td>
            <td>Description</td>
	        <td>Nombre de topics</td>
	        <td>Dernière intéraction</td>
            <td>Suppression</td>

	    </tr>
	    </thead>
	    <tbody>
	    <?php /** @noinspection PhpUndefinedVariableInspection */
	    foreach($data['totalDesc'] as $datum): ?>
	        <tr <?php echo 'data-href="adminforum/topic/' . $datum['category_id'] . '".'?>>
	            <td><?php echo '<a href="adminforum/topic/'.$datum['category_id'].'">'.$datum['name'].'</a>'?></td>
                <td><?php echo $datum['description'] ?></td>
	            <td><?php echo $datum['total_topics'] ?></td>
	            <td><?php echo 'date' ?></td>
                <td><?php echo '<a onclick="return confirm(\'Êtes-vous sûr de vouloir supprimer cette catégorie ?\')"
                    href="adminforum/deleteCategory/' . $datum['category_id'] . '" class="button">Supprimer</a>' ?></td>

	        </tr>
	    <?php endforeach ?>
	    </tbody>
	    </table>

<img class="open-button" src="public/images/plus.png" onclick="openForm()">


<div class="form-popup" id="myForm">
    <form action="adminforum/newCategory" class="form-container" method="post">

        <h1>Nouvelle catégorie</h1>

        <label><b>Catégorie</b></label>
        <input type="text" placeholder="Écrivez la catégorie" name="cat_name" required>

        <label for="msg"><b>Description</b></label>
        <textarea placeholder="Détaillez votre problème" name="description" required></textarea>

        <button type="submit" class="btn">Créer</button>
        <button type="button" class="btn cancel" onclick="closeForm()">Annuler</button>
    </form>
</div>


<?php
/*print_r($data['totalDesc'])*/
 /*echo 'data-href="forum/topic/' . $datum['category_id'] . '".'?>*/
?>