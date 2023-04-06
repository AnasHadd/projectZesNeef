<?php
//Anas Hddouch//
include_once 'includes/classes/dbh.php';

class klant extends Dbh{
        protected $klantid;
        protected $klantnaam;
        protected $klantemail;
        protected$klantadres;
        protected $klantpostcode;
        protected $klantwoonplaats;

        public function __construct($klantid=0, $klantnaam, $klantemail, $klantadres, $klantpostcode, $klantwoonplaats){

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
        public function createklant($klantid) {
                // SLQ code voor de create
                $sql = "CREATE FROM klant WHERE klantid = ?";
                $stmt = $this->connect()->prepare($sql);
        
                // executes de sql code in de database en checkt of het goed is gegaan of niet
                $stmt->execute([$klantid]);
                if ($stmt->execute()) {
                    echo "<script>console.log('klant has been created.')</script>";
                } else {
                    echo "<script>console.log('Er is iets fout gegaan, kon niet de klant createn.')</script>";
                }
            }public function updateklant($klantid) {
                // SLQ code voor de update
                $sql = "UPDATE FROM klant WHERE klantid = ?";
                $stmt = $this->connect()->prepare($sql);
        
                // executes de sql code in de database en checkt of het goed is gegaan of niet
                $stmt->execute([$klantid]);
                if ($stmt->execute()) {
                    echo "<script>console.log('klant has been updated.')</script>";
                } else {
                    echo "<script>console.log('Er is iets fout gegaan, kon de klant niet update.')</script>";
                }
        }
        public function deleteklant($klantid) {
                // SLQ code voor de delete
                $sql = "DELETE FROM klant WHERE klantid = ?";
                $stmt = $this->connect()->prepare($sql);
        
                // executes de sql code in de database en checkt of het goed is gegaan of niet
                $stmt->execute([$klantid]);
                if ($stmt->execute()) {
                    echo "<script>console.log('klant has been deleted.')</script>";
                } else {
                    echo "<script>console.log('Er is iets fout gegaan, kon niet de klant deleten.')</script>";
                }
            }
}