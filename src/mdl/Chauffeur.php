<?php 
	require_once('src/Spdo.php');

	class Chauffeur {


		private $cin;
		public $nom_prenom;
		public $tel;
		



		public function insertChf ($cin,$nom_prenom,$tel) {
			$statement = SPDO::getInstance()->prepare('Insert into Chauffeur values(:cin,:nom_prenom,:tel)');
			return $clt->execute(array('cin'=>$cin,'nom_prenom'=>$nom_prenom,'tel'=>$tel));
			}
		public function deleteChf($cin){
			$statement = SPDO::getInstance()->prepare('Delete from Chauffeur where cin= :cin');
			return $clt->execute(array('cin'=>$cin));
		}
		public function updateChf($nom_prenom,$tel){
			$statement = SPDO::getInstance()->prepare('update Chauffeur where cin=:cin');
		}
		public function listChf(){
			$statement = SPDO::getInstance()->query('Select * from Chauffeur');
			return $statement->fetchAll(); 
		}
	 }
		