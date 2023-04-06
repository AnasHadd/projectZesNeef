<?php
			//AnasHaddouch//
			require "klant.php";			// nodig om object te maken
			require "dbh.php";	// verbinding maken database
			
		
			$klantid = $_POST["klantidvak"];
			$klantt1 = new klant(); // maakt object
			$klant1->searchklant($klantid);
			$klant1->afdrukkenklant();
		?>