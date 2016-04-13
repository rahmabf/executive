<?php 
	require_once('src/Spdo.php');

	class Maintenance {


		private $id_maintenance;
		public $probleme;
		public $date_accident;	
		public $date_reparation;
		



		public function insertMtn ($id_maintenance,$probleme,$date_accident,$date_reparation) {
			$statement = SPDO::getInstance()->prepare('Insert into maintenance values(:id_mtn,:pb,:date_acc,:date_rep)');
			return $mtn->execute(array('id_mtn'=>$id_maintenance,'pb'=>$probleme,'date_acc'=>$date_accident,'date_rep'=>$date_reparation));
			}
		public function deleteMtn($id_maintenance){
			$statement = SPDO::getInstance()->prepare('Delete from maintenance where id_mtn= :id_mtn');
			return $mtn->execute(array('id_mtn'=>$id_maintenance));
		}
		
		public function listMtn(){
			$statement = SPDO::getInstance()->query('Select * from maintenance');
			return $statement->fetchAll(); 
		}
	 }
		