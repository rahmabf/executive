<?php 
	require_once('src/Spdo.php');

	class Etat_voiture {

		private $id_ev;	
		private $matricule;
		public $etat_v;
		public $km_retour;
		

		public function insertEtv ($id_ev,$matricule,$etat_v,$km_retour) {
			$statement = SPDO::getInstance()->prepare('Insert into etat_voiture values(:id_ev,:matricule,:etat_v,:km)');
			return $etv->execute(array('id_ev'=>$id_ev,'matricule'=>$matricule,'etat_v'=>$etat_v,'km'=>$km_retour));
			}
		public function deleteEtv($id_ev){
			$statement = SPDO::getInstance()->prepare('Delete from etat_voiture where id_ev= :id_ev');
			return $etv->execute(array('id_ev'=>$id_ev));
		}
		public function updateEtv(,$matricule,$etat_v,$km_retour){
			$statement = SPDO::getInstance()->prepare('update etat_voiture where id_ev=:id_ev');
		}
		public function listEtv(){
			$statement = SPDO::getInstance()->query('Select * from etat_voiture');
			return $statement->fetchAll(); 
		}
	 }
		