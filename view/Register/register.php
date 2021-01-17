<?php

$this->title = "Enregistrement";
$this->style = "public/css/index.css";
$this->script = "public/js/home.js";
?>

<h1><?php echo TXT_TITRE_RE2;?></h1>

<p>
    <?php echo TXT_TEXT1_RE2;?><br>
    <?php echo TXT_TEXT2_RE2;?>
</p>

<?php /** @noinspection PhpUndefinedVariableInspection */
echo "<h3>".$login."</h3>";
echo "<h3>".$test."</h3>"; ?>

<img id="LogoPNG" src="public/images/logo.png" alt="Logo du site">

<a href="Login"><?php echo TXT_TEXT3_RE2;?></a>

<a onload="adminAccess()" href="adminhome" id="adminAccess" style="display: none">Accès BackOffice</a>
