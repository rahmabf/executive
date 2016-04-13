<?php 
	require_once('src/ctrl/Controller.php');
	require_once('src/mdl/Client.php');
	class ClientController extends Controller {

		public function insert(){
			$clt= new Client();
			$rs=$clt->insertClt($_POST['cin'],$_POST['nom_prenom'],$_POST['permis'],$_POST['date_cin'],$_POST['date_permis'],$_POST['adress_tun'],$_POST['adress_etr'],$_POST['tel']);
			require_once('src/view/ListClient.php');
		}
		public function delete(){
			$clt= new Client();
			$result=$clt->deleteClt($_POST['cin']);
			require_once('src/view/ListClient.php');
		}
		public function listClt(){
			$clt=new Client();
			$rs=$clt->listClt();
			require_once('src/view/ListClient.php');

		}
		public function update(){
			$clt=new Client();
			$rs=$clt->updateClt($_POST['nom_prenom'],$_POST['permis'],$_POST['date_cin'],$_POST['date_permis'],$_POST['adress_tun'],$_POST['adress_etr'],$_POST['tel']);
			require_once('src/view/ListClient.php');
			
		}
	}