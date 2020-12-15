<?php
$this->style = "public/css/index.css";
$this->title = "Lancement d'un test";
?>

<form id="insertTest" action="index.php?controller=Test&action=add" method="post">

    <label>
        Entrez les résultats du test : <input type="text" name="trame">
    </label><br>
    <label>
        Entrez l'id du militaire : <input type="text" name="UserName">
    </label><br>

    <input type="submit">

</form>
