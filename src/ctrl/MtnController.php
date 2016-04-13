<?php 
	require_once('src/ctrl/Controller.php');
	require_once('src/mdl/Maintenance.php');
	class MtnController extends Controller {

		public function insert(){
			$mt= new Maintenance();
			$mtn=$mt->insertMtn($_POST['id_mtn'],$_POST['probleme'],$_POST['date_acc'],$_POST['date_rep']);
			require_once('src/view/ListMtn.php');
		}
		public function delete(){
			$mt= new Maintenance();
			$mtn=$mt->deleteMtn($_POST['id_mtn']);
			require_once('src/view/ListMtn.php');
		}
		public function listMtn(){
			$mt=new Maintenance();
			$mtn=$mt->listMtn();
			require_once('src/view/ListMtn.php');

		}
		
	}