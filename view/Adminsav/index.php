<?php

$this->title = "AdminSav";
$this->style = "public/css/index.css";
$this->script = "public/js/home.js";
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<h1> RDV </h1>

	<?php print_r($rdv);?>
	<a href="#"> répondre </a>

    <h1> BUG </h1>

    <?php print_r($bug);?>
    <a href="#"> répondre </a>
    <h1> Suggestion </h1>

    <?php print_r($suggestion);?>
    <a href="#"> répondre </a>
	

</body>
</html>

