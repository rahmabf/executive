<?php 
	require_once('src/Spdo.php');

	class Car {


		public $matricule;	
		public $date_vignettes;
		public $date_assurance;
		public $date_visit;
		public $Modele;


		public function insertCar ($mat,$date_vi,$date_ass,$date_vt,$Modele) {
			$statement = SPDO::getInstance()->prepare('Insert into Car values(:matricule,:date_vignettes,:date_assurance,:date_visit,:Modèle)');
			return $cars->execute(array('matricule'=>$mat,'date_vignettes'=>$date_vi,'date_assurance'=>$date_ass,'date_visit'=>$date_vt,'Modèle'=>$Modele));
			}
		public function deleteCar($mat){
			$statement = SPDO::getInstance()->prepare('Delete from Car where matricule= :mat');
			return $cars->execute(array('mat'=>$mat));
		}
		public function updateCar($date_vi,$date_ass,$date_vt,$Modele){
			$statement = SPDO::getInstance()->prepare('update car where matricule=:mat');
		}
		public function listCar(){
			$statement = SPDO::getInstance()->query('Select c.matricule,c.Nom_modele,c.date_vignettes,c.date_assurance,c.date_visit,m.Nom_marque from car c ,model m where m.Nom_modele=c.Nom_modele');
			return $statement->fetchAll(); 
		}
		public function listMarque(){
			$statement = SPDO::getInstance()->query('Select * from marque');

			return $statement->fetchAll();

		}
		public function listModel($mar){
			$statement = SPDO::getInstance()->prepare('Select * from model where Nom_marque= :mar');
			$statement->execute(array('mar'=>$mar));
			return $statement->fetchAll();

		}
	 }
		


	











?>