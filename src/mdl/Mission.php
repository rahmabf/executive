<?php 
	require_once('src/Spdo.php');

	class Mission {


		private $id_mission;	
		public $type;
		public $date_debut;
		public $date_fin;
		public $cin_chauff;
		



		public function insertMis ($id_mission,$type,$date_debut,$date_fin,$cin_chauff) {
			$statement = SPDO::getInstance()->prepare('Insert into mission values(:id_miss,:type,:date_db,:date_f,:cin_c)');
			return $miss->execute(array('id_miss'=>$id_mission,'type'=>$type,'date_db'=>$date_debut,'date_f'=>$date_fin,'cin_c'=>$cin_chauff));
			}
		public function deleteMis($id_mission){
			$statement = SPDO::getInstance()->prepare('Delete from mission where id_miss= :id_miss');
			return $miss->execute(array('id_miss'=>$id_mission));
		}
		public function updateMis($type,$date_debut,$date_fin,$cin_chauff){
			$statement = SPDO::getInstance()->prepare('update mission where id_miss=:id_miss');
		}
		public function listMis(){
			$statement = SPDO::getInstance()->query('Select * from mission');
			return $statement->fetchAll(); 
		}
	 }
		