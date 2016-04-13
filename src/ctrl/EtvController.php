<?php 
	require_once('src/ctrl/Controller.php');
	require_once('src/mdl/Etat_voiture.php');
	class EtvController extends Controller {

		public function insert(){
			$et= new Etat_voiture();
			$etv=$et->insertEtv($_POST['id_ev'],$_POST['matricule'],$_POST['etat_v'],$_POST['km']);
			require_once('src/view/ListEtv.php');
		}
		public function delete(){
			$et= new Etat_voiture();
			$etv=$et->deleteEtv($_POST['id_ev']);
			require_once('src/view/ListEtv.php');
		}
		public function listEtv(){
			$et=new Etat_voiture();
			$etv=$et->listEtv();
			require_once('src/view/listEtv.php');

		}
		public function update(){
			$et=new Etat_voiture();
			$etv=$et->updateEtv($_POST['matricule'],$_POST['etat_v'],$_POST['etat_v']);
			require_once('src/view/ListEtv.php');
			
		}
	}