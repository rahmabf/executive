<?php 
	class SPDO {
		private static $instance = null;

		public static function getInstance(){
			if(is_null(self::$instance)) {
				self::$instance = new PDO('mysql:host=localhost;dbname=executive;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			}
			return self::$instance;
		}
	}




?>