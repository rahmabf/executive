<?php 
	require_once('src/Spdo.php');

	class User {


		private $login;
		private $password;

		public function getLogin(){
			return $this->login; 

		}
		public function setLogin($log){
			$this->login = $log;
		}

		public function getPassword(){
			return $this->password; 
		}
		public function setPassword($psw){
			$this->password = $psw;
		}
		public function insertUser($log,$psw) {
			$statement = SPDO::getInstance()->prepare('insert into user values(:login,:password)');
			return $rs->execute(array('login'=>$log,'password'=>sha1($psw)));
		}
			
		public function init($log,$psw){
			$this->setLogin($log);
			$this->setPassword($psw);
		}
		public function connection($log,$psw){
			$st = SPDO::getInstance()->prepare('select * from user where login = :log AND password= :psw');
			$st->execute(array('log'=>$log,'psw'=>sha1($psw)));
			$cpt = 0;
			while($result = $st->fetch()){
				$cpt++;
			}
			$st->closeCursor();
			if($cpt==1){
				$this->login=$log;
				$this->password=$psw;
				
				
				return true;

			}
			else {
				return false;
			}
		}
		public function deleteUser($log){
			$statement = SPDO::getInstance()->prepare('Delete from user where login= :log');
			return $rs->execute(array('log'=>$log));
		}
		public function listUser(){
			$statement = SPDO::getInstance()->query('Select * from user');
			return $statement->fetchAll(); 
		}
	}











