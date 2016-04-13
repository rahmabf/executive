<?php 
	require_once('src/Spdo.php');

	class Prolongation {


		private $id_prolog;
		public $date_depart;
		public $date_fin;


		public function insertPrlg ($id_prolog,$date_depart,$date_fin) {
			$statement = SPDO::getInstance()->prepare('Insert into prolongation values(:id_pro,:date_db,:date_f)');
			return $prlg->execute(array('id_pro'=>$id_prolog,'date_db'=>$date_depart,'date_f'=>$date_fin));
			}
		public function deletePrlg($id_prolog){
			$statement = SPDO::getInstance()->prepare('Delete from prolongation where id_pro= :id_pro');
			return $prlg->execute(array('id_pro'=>$id_prolog));
		}
		public function updatePrlg($date_depart,$date_fin){
			$statement = SPDO::getInstance()->prepare('update prolongation where id_pro=:id_pro');
		}
		public function listPrlg(){
			$statement = SPDO::getInstance()->query('Select * from prolongation');
			return $statement->fetchAll(); 
		}
	 }
		