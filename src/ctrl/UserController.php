<?php 
	require_once('src/ctrl/Controller.php');
	require_once('src/mdl/User.php');
	class UserController extends Controller {

		public function insert(){
			$user= new User();
			$users=$user->insertUser($_POST['log'],$_POST['psw']);
			require_once('src/view/ListeUser.php');
		}
		public function delete(){
			$user= new User();
			$users=$user->deleteUser($_POST['log']);
			require_once('src/view/ListeUser.php');
		}
		public function listUser(){
			$user=new User();
			$users=$user->listUser();
			require_once('src/view/ListeUser.php');

		}
	}