<h1>delete klant 3</h1>
		
		<?php
			require "klant.php";

		    $klantid = $_POST["klantidvak"];
			$verwijderen = $_POST["verwijderBox"];
			
			if ($verwijderen=="ja")
			{
				echo "De klant is verwijderd <br/>";
				$klant1 =  new klant();
				$klant1->deleteklant($klantid);
			}
			else
			{
				echo "De klant is niet verwijderd <br/>";
			}
		?>