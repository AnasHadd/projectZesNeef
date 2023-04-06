<?php
			require "klant.php";

            // gegevens uit de array in variabelen stoppen
		    $klantid = $_POST["klantidvak"];
			$klantnaam = $_POST["klantnaamvak"];
            $klantemail = $_POST["klantemailvak"];
            $klantadres = $_POST["klantadresvak"];
            $klantpostcode = $_POST["klantpostcodevak"];
            $klantwoonplaats = $_POST["klantwoonplaatsvak"];
			
            // maken object ---------------------------------------------------
			$klant1 = new klant($klantnaam, $klantemail, $klantadres, $klantpostcode, $klantwoonplaats); // maakt object
			$klant1->updateklant($klantid);		           // vervangt de tabelgegevens voor objectgegevens
            echo "Dit zijn de gewijzigde gegevens: <br/>";
            echo $klantid."<br/>";
			$klant1->afdrukkenklant();	                       // drukt object af

		?>