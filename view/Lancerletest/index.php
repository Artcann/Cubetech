<?php
$this->title = "Lancerletest";
$this->style = "public/css/index.css";
?>


<form id="" action="" method="">
	<select name="test" id="">
		<option> SELECTIONNER LE TEST A LANCER </option>
	    <?php foreach ($test as $key => $value): ?>
			<option value =''> <?php echo 'Date:' . ' ' . $value['date'] . ' | ' . 'Heure:' . ' ' . $value['heure'] . ' | ' .
			 'Numéro de carte:' . ' ' . $value['idCapteur'] . ' | ' .
			 'Nom:' . ' ' . $data[$value['idUser']]["nom"] . ' | ' . 
			 'Prénom:' . ' ' . $data[$value['idUser']]["prenom"]; ?> </option>
		<?php endforeach ?>
	</select>
	<input type="submit" value="LANCER LE TEST">
</form>



