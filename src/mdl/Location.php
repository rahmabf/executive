<?php 
	require_once('src/Spdo.php');

	class Location {


		private $cin;
		private $permis;	
		public $nom_prenom;
		public $date_cin;
		public $date_permis;
		public $adress_tun;
		public $adress_etr;
		public $tel;



		public function insertClt ($cin,$permis,$nom_pr,$date_cin,$date_perm,$adrs_tun,$adrs_etr,$tel) {
			$statement = SPDO::getInstance()->prepare('Insert into Client values(:cin,:permis,:nom_prenom,:date_cin,:date_permis,:adress_tun,:adress_etr,:tel)');
			return $clt->execute(array('cin'=>$cin,'permis'=>$permis,'nom_prenom'=>$nom_prenom,'date_cin'=>$date_cin,'date_permis'=>$date_perm,'adress_tun'=>$adrs_tun,'adress_etr'=>$adress_etr,'tel'=>$tel));
			}
		public function deleteClt($cin){
			$statement = SPDO::getInstance()->prepare('Delete from Client where cin= :cin');
			return $clt->execute(array('cin'=>$cin));
		}
		public function updateClt($permis,$nom_pr,$date_cin,$date_perm,$adrs_tun,$adrs_etr,$tel){
			$statement = SPDO::getInstance()->prepare('update Client where cin=:cin');
		}
		public function listClt(){
			$statement = SPDO::getInstance()->query('Select * from Client');
			return $statement->fetchAll(); 
		}
	 }
		