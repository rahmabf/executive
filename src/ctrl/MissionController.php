<?php 
	require_once('src/ctrl/Controller.php');
	require_once('src/mdl/Mission.php');
	class MissionController extends Controller {

		public function insert(){
			$mis= new Mission();
			$miss=$mis->insertMis($_POST['id_miss'],$_POST['type'],$_POST['date_debut'],$_POST['date_fin'],$_POST['cin_chauff']);
			require_once('src/view/ListMission.php');
		}
		public function delete(){
			$mis= new Mission();
			$miss=$mis->deleteMis($_POST['id_miss']);
			require_once('src/view/ListMission.php');
		}
		public function listMis(){
			$mis=new Mission();
			$miss=$mis->listMis();
			require_once('src/view/ListMission.php');

		}
		public function update(){
			$mis=new Misson();
			$miss=$mis->updateMis($_POST['type'],$_POST['date_debut'],$_POST['date_fin'],$_POST['cin_chauff']);
			require_once('src/view/ListMission.php');
			
		}
	}