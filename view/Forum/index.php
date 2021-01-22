<?php

$this->title = "Forum | Cubetech";

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

	    </tr>
	    </thead>
	    <tbody>
	    <?php /** @noinspection PhpUndefinedVariableInspection */
	    foreach($data['totalDesc'] as $datum): ?>
	        <tr <?php echo 'data-href="forum/topic/' . $datum['category_id'] . '".'?>>
	            <td><?php echo '<a href="forum/topic/'.$datum['category_id'].'">'.$datum['name'].'</a>'?></td>
                <td><?php echo $datum['description'] ?></td>
	            <td><?php echo $datum['total_topics'] ?></td>
	            <td><?php echo 'date' ?></td>

	        </tr>
	    <?php endforeach ?>
	    </tbody>
	    </table>

<?php
/*print_r($data['totalDesc'])*/
 /*echo 'data-href="forum/topic/' . $datum['category_id'] . '".'?>*/
?>