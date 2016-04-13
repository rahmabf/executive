<?php 
	require_once('src/Spdo.php');

	class Accessoires {


		private $id_access;
		public $libelle;
		


		public function insertAcs ($id_access,$libelle) {
			$statement = SPDO::getInstance()->prepare('Insert into accessoires values(:id_acs,:libelle)');
			return $acs->execute(array('id_acs'=>$id_access,'libelle'=>$libelle));
			}
		public function deleteAcs($id_access){
			$statement = SPDO::getInstance()->prepare('Delete from accessoires where id_acs= :id_acs');
			return $acs->execute(array('id_acs'=>$id_access));
		}
		public function updateAcs($libelle){
			$statement = SPDO::getInstance()->prepare('update accessoires where id_acs=:id_acs');
		}
		public function listAcs(){
			$statement = SPDO::getInstance()->query('Select * from accessoires');
			return $statement->fetchAll(); 
		}
	 }
		