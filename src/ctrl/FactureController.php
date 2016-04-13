<?php 
	require_once('src/ctrl/Controller.php');
	require_once('src/mdl/Facture.php');
	class FactureController extends Controller {

		public function insert(){
			$ft= new Facture();
			$fct=$ft->insertFct($_POST['id_fct'],$_POST['cin_clt'],$_POST['matricule'],$_POST['date_depart'],$_POST['date_retour'],$_POST['id_location']);
			require_once('src/view/ListFacture.php');
		}
		public function delete(){
			$ft= new Facture();
			$fct=$ft->deleteFct($_POST['id_fct']);
			require_once('src/view/ListFacture.php');
		}
		public function listFct(){
			$ft=new Facture();
			$fct=$ft->listFct();
			require_once('src/view/ListFacture.php');

		}
		public function update(){
			$ft=new Facture();
			$fct=$ft->updateFct($_POST['cin_clt'],$_POST['matricule'],$_POST['date_depart'],$_POST['date_retour'],$_POST['id_location']);
			require_once('src/view/ListFacture.php');
			
		}
	}