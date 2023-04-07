<?php
//Anas Hddouch//
include_once 'includes/classes/dbh.php';

class klant extends data{
        public $klantid;
        public $klantnaam;
        public $klantemail;
        public $klantadres;
        public $klantpostcode;
        public $klantwoonplaats;

        public function __construct($klantid=0, $klantnaam="", $klantemail="", $klantadres="", $klantpostcode="", $klantwoonplaats=""){

           $this->klantid = $klantid;
           $this->klantnaam = $klantnaam;
           $this->klantemail = $klantemail;
           $this->klantadres = $klantadres;
           $this->klantpostcode = $klantpostcode;
           $this->klantwoonplaats = $klantwoonplaats;

        }
        public function setklantid($klantid){
                $this->klantid = $klantid;
        }
        public function setklantnaam($klantnaam){
                $this->klantnaam = $klantnaam;
        }
        public function setklantemail($klantemail){
                $this->klantemail = $klantemail;
        }
        public function setklantadres($klantadres){
                $this->klantadres = $klantadres;
        }
        public function setklantpostcode($klantpostcode){
                $this->klantpostcode = $klantpostcode;
        }
        public function setklantwoonplaats($klantwoonplaats){
                $this->klantwoonplaats = $klantwoonplaats;
        }
        public function getklantid($klantid){
              return  $this->klantid = $klantid;
        }
        public function getklantnaam($klantnaam){
                return  $this->klantnaam = $klantnaam;
        }
        public function getklantemail($klantemail){
                return  $this->klantemail = $klantemail;
        }
        public function getklantadres($klantadres){
                return  $this->klantadres = $klantadres;
        }
        public function getklantpostcode($klantpostcode){
                return   $this->klantpostcode = $klantpostcode;
        }
        public function getklantwoonplaats($klantwoonplaats){
                return   $this->klantwoonplaats = $klantwoonplaats;
        }
        public function afdrukkenklant()
		{
			echo $this->getklantnaam();
			echo "<br/>";
			echo $this->getklantemail();
			echo "<br/>";
			echo $this->getklantadres();
			echo "<br/><br/>";
                        echo $this->getklantpostcode();
			echo "<br/><br/>";
                        echo $this->getklantwoonplaats();
			echo "<br/><br/>";
		}
        public function createklant()		// gegevens in de database zetten
        {
                require "dbh.php";
                // gegevens uit het object in variabelen zetten 
                $klantid = NULL; 				// zit niet in het object
                $klantnaam =  $this->getklantnaam();
                $klantemail = $this->getklantemail();
                $klantadres = $this->getklantadres();
                $klantpostcode = $this->getklantpostcode();
                $klantwoonplaats = $this->getklantwoonplaats();
                
                // statement maken voor invoer in de tabel
                $sql = $conn->prepare
                ("
                        insert into klant values
                        (:klantid, :klantnaam, :klantemail, :klantadres, :klantpostcode, :klantwoonplaats)
                ");
                // variabelen in de statement zetten
                $sql->bindParam(":klantid", $klantid);
                $sql->bindParam(":klantnaam", $klantnaam);
                $sql->bindParam(":klantemail", $klantemail);
                $sql->bindParam(":klantadres",  $klantadres);
                $sql->bindParam(":klantpostcode",  $klantpostcode);
                $sql->bindParam(":klantwoonplaats",  $klantwoonplaats);
                $sql->execute();
                // melding 
                echo "Deze klant is toegevoegd: <br/>";

        }
            public function readklant()
            {
                    require "dbh.php";
                    // statement maken
                    $sql = $conn->prepare("
                        select klantid, klantnaam, klantemail, klantadres, klantpostcode, klanwoonplaats 
                        from klant  
                         ");
                    $sql->execute();
                    foreach($sql as $klant)
                    {
                            // gegevens uit de array in het object stoppen
                            // en gelijk afdrukken
                            echo $klant["klantid"]. " - ";		// geen eigenschap van object
                            echo $this->klantnaam=$klant["klantnaam"]. " - ";
                            echo $this->klantemail=$klant["email"]. " - ";
                            echo $this->klantadres=$klant["adres"]. " - ";
                            echo $this->klantpostcode=$klant["postcode"]. " - ";
                            echo $this->klantwoonplaats=$klant["woonplaats"]. "<br/>";
                    }
            }
            public function searchklant($klantid)
		{
			require "dbh.php";

			// statement maken
			$sql = $conn->prepare("select klantid, klantnaam, klantemail, klantadres, klantpostcode, klanwoonplaats 
                        from klant  			
			 ");
			// variabele in de stament zetten
			$sql->bindParam(":klantid", $klantid);
			$sql->execute();

			// gegevens uit de array in het object stoppen
			foreach($sql as $klant)
			{			
				//echo $student["studentid"]. "<br/>";		// geen eigenschap van object
				$this->klantnaam=$klant["klantnaam"];
				$this->klantemail=$klant["klantemail"];
				$this->klantadres=$klant["klantadres"];	
                                $this->klantpostcode=$klant["klantpostcode"];	
                                $this->klantwoonplaats=$klant["klantwoonplaats"];			
			}
		}
            public function updateklant($klantid)
		{
			require "dbh.php";
			// gegevens uit het object in variabelen zetten 
			$klantid;
			$klantnaam      = $this->getklantnaam();
			$klantemail 	= $this->getklantemail();
			$klantadres 	= $this->getklantadres();
                        $klantpostcode 	= $this->getklantpostcode();
                        $klantwoonplaats = $this->getklantwoonplaats();
			// statement maken
			$sql = $conn->prepare("
			update klant
			set klantnaam=:klantnaam, klantemail=:klantemail, klantadres=:klantadres, klantpostcode=:klantpostcode, klantwoonplaats=:klantwoonplaats
			where klantid=:klantid
			");
			// variabelen in de statement zetten
			$sql->bindParam(":klantid", $klantid);
			$sql->bindParam(":klantnaam", $klantnaam);
			$sql->bindParam(":klantemail", $klantemail);
			$sql->bindParam(":klantadres", $klantadres);
                        $sql->bindParam(":klantpostcode", $klantpostcode);
                        $sql->bindParam(":klantwoonplaats", $klantwoonplaats);
			$sql->execute();
		}
		public function deleteklant($klanttid)
		{
			require "dbh.php";
			// statement maken
			$sql = $conn->prepare("
			delete from klant
			where klantid = :klantid
			");
			// variabele in de statement zetten
			$sql->bindParam(":klantid", $klantid);
			$sql->execute();
		}
		
}