<?php 
	require_once('src/ctrl/Controller.php');
	require_once('src/mdl/Prolongation.php');
	class PrologController extends Controller {

		public function insert(){
			$plg= new Prolongation();
			$prlg=$plg->insertPrlg($_POST['id_prolog'],$_POST['date_depart'],$_POST['date_fin']);
			require_once('src/view/ListProlog.php');
		}
		public function delete(){
			$plg= new Prolongation();
			$prlg=$plg->deletePrlg($_POST['id_prolog']);
			require_once('src/view/ListProlog.php');
		}
		public function listPrlg(){
			$plg=new Prolongation();
			$prlg=$plg->listPrlg();
			require_once('src/view/ListProlog.php');

		}
		public function update(){
			$plg=new Prolongation();
			$prlg=$plg->updatePrlg($_POST['date_depart'],$_POST['date_fin']);
			require_once('src/view/ListProlog.php');
			
		}
	}