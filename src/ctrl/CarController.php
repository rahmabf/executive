<?php 
	require_once('src/ctrl/Controller.php');
	require_once('src/mdl/Car.php');
	class CarController extends Controller {

		public function insert(){
			$car= new Car();
			$cars=$car->insertCar($_POST['mat'],$_POST['date_vi'],$_POST['date_ass'],$_POST['date_vt']);
			require_once('src/view/ListCar.php');
		}
		public function delete(){
			$car= new Car();
			$result=$car->deleteCar($_POST['mat']);
			require_once('src/view/ListCar.php');
		}
		public function listCar($test=null,$oper=null){
			$car=new Car();
			$cars=$car->listCar();
			$m=$car->listMarque();
			if(isset($_POST['rechmodele'])){
				$mod=$car->listModel($_POST['rechmodele']);
			}
			
			require_once('src/view/ListCar.php');

		}
		public function update(){
			$car=new Car();
			$cars=$car->updateCar($_POST['date_vi'],$_POST['date_ass'],$_POST['date_vt']);
			require_once('src/view/ListCar.php');
			
		}
	}