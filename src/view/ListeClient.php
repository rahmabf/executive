<html>
	<head>
		<meta charset="utf-8">
		<title>Liste Client</title>
		<link rel="stylesheet" href="public/css/accueil.css">
		<link rel="stylesheet" href="public/css/Car.css">
	</head>
	
	<body>
	
		<?php
			require_once('menu.html');
			require_once('header.html');
		?>
		
		<section>
			<form action="/executive/?entry=client&action=insertClient" method="POST" accept-charset="UTF-8">
				<input type="text" placeholder="CIN" name="CIN">
				<input type="text" placeholder="Permis" name="Permis">
				<input type="text" placeholder="Nom & Prenom" name="Nom & Prenom">
				<input type="text" placeholder="Date CIN" name="Date CIN" onfocus="this.setAttribute('type','date');" onblur="this.setAttribute('type','text');">
				<input type="text" placeholder="Date Permis" name="Date Permis" onfocus="this.setAttribute('type','date');" onblur="this.setAttribute('type','text');">
				<input type="text" placeholder="Adresse Tunisie" name="Adresse Tunisie">
				<input type="text" placeholder="Adresse Etranger" name="Adresse Etranger">
				<input type="text" placeholder="TEL" name="TEL">
				<button type="submit">
				
					<svg x="0px" y="0px" viewBox="0 0 490.434 490.433" xml:space="preserve"><g><path d="M472.003,58.36l-13.132-11.282c-21.798-18.732-54.554-16.644-73.799,4.697L165.39,295.359l-66.312-57.112 c-21.775-18.753-54.536-16.707-73.804,4.611l-11.611,12.848c-9.416,10.413-14.305,24.149-13.595,38.18 c0.717,14.023,6.973,27.188,17.402,36.6l121.553,111.311c10.524,9.883,24.628,15.037,39.044,14.272 c14.416-0.763,27.894-7.386,37.311-18.329l262.245-304.71c9.162-10.646,13.717-24.494,12.661-38.496 C489.229,80.522,482.655,67.512,472.003,58.36z"/></g></svg>
				</button>
				
				
			</form>
			
			
			<?php
				if(isset($rs)) {
					if(sizeof($rs) > 0) {
						foreach($rs as $clt) { ?>
							<form action="/executive/?entry=client&action=listClient" method="POST">
								
								<input type="text" placeholder="CIN" name="CIN" value="<?php echo $clt['cin'] ?>" readonly>
								<input type="text" placeholder="Permis" name="Permis" value="<?php echo $clt['permis'] ?>" readonly>
								<input type="text" placeholder="Nom & Prenom" name="Nom & Prenom" value="<?php echo $clt['nom_prenom'] ?>" readonly>
								<input type="text" placeholder="Date CIN" name="Date CIN" onfocus="this.setAttribute('type','date');" onblur="this.setAttribute('type','text');"value="<?php echo $clt['date_cin'] ?>" readonly>
								<input type="text" placeholder="Date Permis" name="Date Permis" onfocus="this.setAttribute('type','date');" onblur="this.setAttribute('type','text');"value="<?php echo $clt['date_permis'] ?>" readonly>
								<input type="text" placeholder="TEL" name="TEL" value="<?php echo $clt['tel'] ?>" readonly>
								<button type="submit">
										<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											 width="20px" height="20px" viewBox="0 0 408.483 408.483" style="background-color:red;fill:white;"xml:space="preserve"body>
>
												<g>
													<g>
														<path d="M87.748,388.784c0.461,11.01,9.521,19.699,20.539,19.699h191.911c11.018,0,20.078-8.689,20.539-19.699l13.705-289.316
															H74.043L87.748,388.784z M247.655,171.329c0-4.61,3.738-8.349,8.35-8.349h13.355c4.609,0,8.35,3.738,8.35,8.349v165.293
															c0,4.611-3.738,8.349-8.35,8.349h-13.355c-4.61,0-8.35-3.736-8.35-8.349V171.329z M189.216,171.329
															c0-4.61,3.738-8.349,8.349-8.349h13.355c4.609,0,8.349,3.738,8.349,8.349v165.293c0,4.611-3.737,8.349-8.349,8.349h-13.355
															c-4.61,0-8.349-3.736-8.349-8.349V171.329L189.216,171.329z M130.775,171.329c0-4.61,3.738-8.349,8.349-8.349h13.356
															c4.61,0,8.349,3.738,8.349,8.349v165.293c0,4.611-3.738,8.349-8.349,8.349h-13.356c-4.61,0-8.349-3.736-8.349-8.349V171.329z"/>
														<path d="M343.567,21.043h-88.535V4.305c0-2.377-1.927-4.305-4.305-4.305h-92.971c-2.377,0-4.304,1.928-4.304,4.305v16.737H64.916
															c-7.125,0-12.9,5.776-12.9,12.901V74.47h304.451V33.944C356.467,26.819,350.692,21.043,343.567,21.043z"/>
													</g>
												</g>
										</svg>
								</button>	
								
																	
									
							</form><?php
						}
					}else { ?>
						<span>Pas de Client</span>
					<?php }
				}
			?>
		</section>
		
		
				<?php
			if(!is_null($test) && !is_null($oper)) { ?>
				<aside onclick="this.style.display = 'none';">
					<div data-type="<?php echo $test?'valid':'error';?>">
						<?php
							switch($oper) {
								case 'add' : echo $test?'Client ajouté avec succés':'Erreur lors du traitement de la tarnsaction';
								break;
								case 'del': echo $test?'Client supprimé avec succés':'Erreur lors de la suppression Client';
								break;
							}
						?>
					</div>
				</aside><?php
			}
		?>
		
	</body>
</html>