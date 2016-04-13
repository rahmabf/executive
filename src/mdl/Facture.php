<?php 
	require_once('src/Spdo.php');

	class Facteur {

		private $id_fct;
		private $cin_clt;
		private $matricule;	
		public $date_depart;
		public $date_retour;
		public $id_location;
		



		public function insertFct ($id_fct,$cin_clt,$matricule,$date_depart,$date_retour,$id_location) {
			$statement = SPDO::getInstance()->prepare('Insert into facture values(id_f,:cin,:matricule,:date_dep,:date_rt,:id_loc)');
			return $fct->execute(array('id_f'=>$id_fct,'cin'=>$cin_clt,'matricule'=>$matricule,'date_dep'=>$date_depart,'date_rt'=>$date_retour,'id_loc'=>$id_location));
			}
		public function deleteFct($id_fct){
			$statement = SPDO::getInstance()->prepare('Delete from facture where id_f= :id_f');
			return $fct->execute(array('id_f'=>$id_fct));
		}
		public function updateFct($id_fct,$cin_clt,$matricule,$date_depart,$date_retour,$id_location){
			$statement = SPDO::getInstance()->prepare('update facture where id_f=:id_f');
		}
		public function listFct(){
			$statement = SPDO::getInstance()->query('Select * from facture');
			return $statement->fetchAll(); 
		}
	 }
		