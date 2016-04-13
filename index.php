<?php 
	require_once('src/ctrl/UserController.php');
	require_once('src/ctrl/ConnectionController.php');
	require_once('src/ctrl/CarController.php');
	require_once('src/ctrl/ChauffeurController.php');
	require_once('src/ctrl/ClientController.php');
	require_once('src/ctrl/AccesController.php');
	require_once('src/ctrl/CondController.php');


	$cnxcont = new ConnectionController();
	$usercnt = new UserController();
	$carcnt = new CarController();
	$chauffcnt = new ChauffeurController();
	$cltcnt = new ClientController();
	$acscnt = new AccesController();
	$cndcnt = new CondController();



	if (isset($_GET['entry']) && isset($_GET['action'])){
		if($_GET['entry']=='index' && $_GET['action']=='connect'){
			$cnxcont->connect();
		}
		else if($_GET['entry']=='index' && $_GET['action']=='disconnect'){
			$cnxcont->disconnect();

		}
		else if($_GET['entry']=='index' && $_GET['action']=='dash'){
			$cnxcont->stat();
		
		}
		else if($_GET['entry']=='user' && $_GET['action']=='insert'){
			$usercnt->insertUser();
		}	
		else if($_GET['entry']=='user' && $_GET['action']=='delete'){
			$usercnt->deleteUser();
		}
		else if($_GET['entry']=='user' && $_GET['action']=='ListeUser'){
			$usercnt->listUser();
		}
		else if($_GET['entry']=='car' && $_GET['action']=='insert'){
			$carcnt->insertCar();
		}	
		else if($_GET['entry']=='car' && $_GET['action']=='delete'){
			$carcnt->deleteCar();
		}
		else if($_GET['entry']=='car' && $_GET['action']=='updateCar'){
			$carcnt->updateCar();
		}
		else if($_GET['entry']=='car' && $_GET['action']=='ListeCar'){
			$carcnt->listCar();
		}
			else if($_GET['entry']=='chauffeur' && $_GET['action']=='insertChauffeur'){
			$chauffcnt->insertChauffeur();
		}	
		else if($_GET['entry']=='chauffeur' && $_GET['action']=='deleteChauffeur'){
			$chauffcnt->deleteChauffeur();
		}
		else if($_GET['entry']=='chauffeur' && $_GET['action']=='updateChauffeur'){
			$chauffcnt->updateChauffeur();
		}
		else if($_GET['entry']=='chauffeur' && $_GET['action']=='ListeChauffeur'){
			$chauffcnt->listChauffeur();
		}	
			else if($_GET['entry']=='client' && $_GET['action']=='insertClient'){
			$cltcnt->insertClient();
		}	
		else if($_GET['entry']=='client' && $_GET['action']=='deleteClient'){
			$cltcnt->deleteClient();
		}
		else if($_GET['entry']=='client' && $_GET['action']=='updateClient'){
			$cltcnt->updateClient();
		}
		else if($_GET['entry']=='client' && $_GET['action']=='ListeClient'){
			$cltcnt->listClient();
			}	
			else if($_GET['entry']=='acs' && $_GET['action']=='insertAcs'){
			$acscnt->insertAcs();
		}	
		else if($_GET['entry']=='acs' && $_GET['action']=='deleteAcs'){
			$acscnt->deleteAcs();
		}
		else if($_GET['entry']=='acs' && $_GET['action']=='updateAcs'){
			$acscnt->updateAcs();
		}
		else if($_GET['entry']=='acs' && $_GET['action']=='ListeAcs'){
			$acscnt->listAcs();
		}
		else if($_GET['entry']=='cond' && $_GET['action']=='listCond'){
			$cndcnt->listCnd();
		}
		else if($_GET['entry']=='cond' && $_GET['action']=='insertCond'){
			$cndcnt->insert();
		}
		else if($_GET['entry']=='cond' && $_GET['action']=='deleteCond'){
			$cndcnt->delete();
		}
		else if($_GET['entry']=='cond' && $_GET['action']=='updateCond'){
			$cndcnt->update();
		}
	}else {
		header('Location: /executive/?entry=index&action=connect');
		exit();

	}