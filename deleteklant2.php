<?php
include_once 'includes/classes/klant.php';
					
			$klantid = $_POST["klantidvak"];	// uitlezen vakje van deleteStudentForm1 
			$klant1 = new klant();				// object aanmaken
			$klant1->searchklant($klantid);	
			$klant1->afdrukkenklant();
		?>
		
		<form action="deleteklant3.php" method="post">
			<!-- $studentid mag niet meer gewijzigd worden -->
			<input type="hidden" name="klantidvak" value=" <?php echo $klantid ?> ">
			<!-- 2x verwijderBox om nee of ja door te kunnen geven -->
			<input type="hidden" 	name="verwijderBox" value="nee">			
			<input type="checkbox" 	name="verwijderBox" value="ja">
			<label for="verwijderBox"> Verwijder deze student.</label><br/><br/>
			<input type="submit"><br/><br/>
		</form>
