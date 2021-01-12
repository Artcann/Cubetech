<?php
$this->style="public/css/index.css";
$this->script="public/js/result.js";
$this->title="Résultat";
?>

<div id="selectResult">
    <label for="select">Selectionnez les résultats à afficher</label>
    <select id="select">
        <option value="0">---Select---</option>
        <option value="3">Température</option>
        <option value="5">Rythme Cardiaque</option>
    </select>
</div>

<div id="graph">
    <canvas id="myChart" width="500" height="90%"></canvas>
</div>

<script>let userId = "<?php echo $id?>"</script>

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
