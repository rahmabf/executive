<?php 
	require_once('src/ctrl/Controller.php');
	require_once('src/mdl/Accessoires.php');
	class AccesController extends Controller {

		public function insert(){
			$acs= new Accessoires();
			$acces=$acs->insertAcs($_POST['id_acs'],$_POST['libelle']);
			require_once('src/view/ListAcs.php');
		}
		public function delete(){
			$acs= new Accessoires();
			$acces=$acs->deleteAcs($_POST['id_acs']);
			require_once('src/view/ListAcs.php');
		}
		public function listAcs(){
			$acs=new Accessoires();
			$acces=$acs->listAcs();
			require_once('src/view/ListAcs.php');

		}
		public function update(){
			$acs=new Accessoires();
			$acces=$acs->updateAcs($_POST['libelle']);
			require_once('src/view/ListAcs.php');
			
		}
	}