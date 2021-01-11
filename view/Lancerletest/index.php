<?php
$this->title = "Lancerletest";
$this->style = "public/css/index.css";
?>


<form id="" action="" method="">

	<table class="tableauRdv">
	    <thead>
	    <tr>
	        <td>Date</td>
	        <td>Heure</td>
	        <td>Nom</td>
	        <td>Prénom</td>
	        <td>Carte</td>
	        <td>Lancement</td>
	    </tr>
	    </thead>
	    <tbody>
	    <?php /** @noinspection PhpUndefinedVariableInspection */
	    foreach($test as $key => $value): ?>
	        <tr>
	            <td><?php echo $value['date'];?></td>
	            <td><?php echo $value['heure'];?></td>
	            <td><?php echo $data[$value['idUser']]["nom"];?></td>
	            <td><?php echo $data[$value['idUser']]["prenom"];?></td>
	            <td>
					<select name="carte" id="">
		            	<option> SELECTIONNER LA CARTE A UTILISER </option>
					</select> 
				</td>
				<td><input type="submit" value="LANCER LE TEST"></td>
	        </tr>
	    <?php endforeach ?>
	    </tbody>
	</table>

</form>






