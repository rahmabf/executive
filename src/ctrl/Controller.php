<?php 
	class Controller {
		public function redirect($root,$entry,$action){

		
		header("Location: /$root/?entry=$entry&action=$action");
				exit();
	}
}