<h1>update klant 2</h1>
		
		<?php
			// 
			require "klant.php";					// nodig om object te maken
			$klantid = $_POST["klantidvak"];	// uitlezen vakje van delete 
			$klant1 = new klant();				// object aanmaken
			$klant1->searchklant($klantid);	
			// properties in variabelen zetten
			$klantnaam=$klant1->getklantnaam();
			$klantemail=$klant1->getklantemail();
			$klantadres=$klant1->getklantadres();
            $klantpostcode=$klant1->getklantpostcode();
            $klantwoonplaats=$klant1->getklantwoonplaats();
		?>
		
		<form action="updateklant3.php" method="post">
			<!-- $klantid mag niet meer gewijzigd worden -->
            <?php echo $klantid ?>
            <input type="hidden" name="klantidvak" value="<?php echo $klantid;  ?> "><br/>
            <input type="text"   name="klantnaamvak"  value="<?php echo $klantnaam;     ?> "><br/>
            <input type="text"   name="klantemailvak"  value="<?php echo $klantemail;  ?> "><br/>
            <input type="text"   name="klantadresvak" value="<?php echo $klantadres;  ?> "><br/>
            <input type="text"   name="klantpostcodevak"  value="<?php echo $klantpostcode;  ?> "><br/>
            <input type="text"   name="klantwoonplaatsvak"  value="<?php echo $klantwoonplaats;  ?> "><br/><br/>
			<input type="submit"><br/><br/>
		</form>
