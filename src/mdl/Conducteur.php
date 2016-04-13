<?php 
	require_once('src/Spdo.php');

	class Conducteur {


		private $cin_cond;	
		public $nom_prenom;
		public $permis;
		public $date_permis;
		public $tel;



		public function insertCnd ($cin_cond,$nom_prenom,$permis,$date_permis,$tel) {
			$statement = SPDO::getInstance()->prepare('Insert into conducteur values(:cin,:nom_prenom,:permis,:date_permis,:tel)');
			return $statement->execute(array('cin'=>$cin_cond,'nom_prenom'=>$nom_prenom,'permis'=>$permis,'date_permis'=>$date_permis,'tel'=>$tel));
			}
		public function deleteCnd($cin_cond){
			$statement = SPDO::getInstance()->prepare('Delete from conducteur where cin= :cin');
			return $statement->execute(array('cin'=>$cin_cond));
		}
	
		public function listCnd(){
			$statement = SPDO::getInstance()->query('Select * from conducteur');
			return $statement->fetchAll(); 
		}
	 }
		