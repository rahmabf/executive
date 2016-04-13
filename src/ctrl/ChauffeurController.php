<?php 
	require_once('src/ctrl/Controller.php');
	require_once('src/mdl/Chauffeur.php');
	class ChauffeurController extends Controller {

		public function insert(){
			$ch= new Chauffeur();
			$chauf=$ch->insertchf($_POST['cin'],$_POST['nom_prenom'],$_POST['tel']);
			require_once('src/view/ListChauffeur.php');
		}
		public function delete(){
			$ch= new Chauffeur();
			$chauf=$ch->deleteChf($_POST['cin']);
			require_once('src/view/ListChauffeur.php');
		}
		public function listChf(){
			$ch=new Chauffeur();
			$chauf=$ch->listChf();
			require_once('src/view/ListChauffeur.php');

		}
		public function update(){
			$ch=new Chauffeur();
			$chauf=$ch->updateChf($_POST['nom_prenom'],$_POST['tel']);
			require_once('src/view/ListChauffeur.php');
			
		}
	}