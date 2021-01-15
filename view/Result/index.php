<?php
$this->style="public/css/index.css";
$this->script="public/js/result.js";
$this->title="Résultat";
?>


<div id="selectResult">
    <label for="select"><?php echo TXT_TEXT1_RESULTS;?></label>
    <select id="select">
        <option value="0"><?php echo TXT_TEXT2_RESULTS;?></option>
        <option value="3"><?php echo TXT_TEXT3_RESULTS;?></option>
        <option value="5"><?php echo TXT_TEXT4_RESULTS;?></option>
    </select>
</div>

<div id="graph">
    <canvas id="myChart" width="500" height="90%"></canvas>
</div>

<script>let userId = "<?php echo $id?>"</script>

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

