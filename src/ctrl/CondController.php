<?php 
	require_once('src/ctrl/Controller.php');
	require_once('src/mdl/Conducteur.php');
	class CondController extends Controller {

		public function insert(){
			$c= new Conducteur();
			$cnd=$c->insertCnd($_POST['cin'],$_POST['nom_prenom'],$_POST['permis'],$_POST['date_permis'],$_POST['tel']);
			require_once('src/view/ListCond.php');
		}
		public function delete(){
			$c= new Conducteur();
			$cnd=$c->deleteCnd($_POST['cin']);
			require_once('src/view/ListCond.php');
		}
		public function listCnd(){
			$c=new Conducteur();
			$cnd=$c->listCnd();
			require_once('src/view/ListCond.php');

		}
		public function update(){
			$c=new Conducteur();
			$cnd=$c->updateCnd($_POST['nom_prenom'],$_POST['permis'],$_POST['date_permis'],$_POST['tel']);
			require_once('src/view/ListCond.php');
			
		}
	}