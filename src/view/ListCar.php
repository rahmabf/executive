<html>
	<head>
		<meta charset="utf-8">
		<title>Liste Voitures</title>
		<link rel="stylesheet" href="public/css/accueil.css">
		<link rel="stylesheet" href="public/css/car.css">
	</head>
	
	<body>
	
		<?php
			require_once('menu.html');
			require_once('header.html');
		?>
		<form hidden action="/executive/?entry=car&action=list" method="POST" id="listemodele"></form>
		
		<section>
			<form action="/executive/?entry=car&action=insert" method="POST">
				<input type="text" placeholder="Matricule" name="Matricule">
				<select name="rechmodele" form="listemodele" onchange="document.querySelector('#'+this.getAttribute('form')).submit();">
				<option disabled <?php if(!isset($mod)){echo 'selected';} ?>> Marque </option>
				<?php 
					if (isset($m)){
						if(sizeof($m)){
							foreach($m as $mar){?>
								<option <?php if(isset($mod) && sizeof($mod)>0 && $mar['Nom_marque'] == $mod[0]['Nom_marque']){echo 'selected';} ?>
								value="<?php echo $mar['Nom_marque'] ?>"><?php echo $mar['Nom_marque'] ?></option>
					<?php }
						}
					} ?>
					
					
				</select>
				<select name="modele" >
					<option disabled selected> Modele </option>
					<?php 
						if (isset($mod)){
							if(sizeof($mod)){
								foreach($mod as $md){?>
									<option value="<?php echo $md['Nom_modele'] ?>"><?php echo $md['Nom_modele'] ?></option>
						<?php }
							}
						} ?>
				</select>
				<input type="text" placeholder="Date Vignettes" name="Date Vignettes" onfocus="this.setAttribute('type','date');" onblur="this.setAttribute('type','text');">
				<input type="text" placeholder="Date Assurance" name="Date Assurance" onfocus="this.setAttribute('type','date');" onblur="this.setAttribute('type','text');">
				<input type="text" placeholder="Date Visite" name="Date Visite" onfocus="this.setAttribute('type','date');" onblur="this.setAttribute('type','text');">
				<button type="submit">
					<svg x="0px" y="0px" viewBox="0 0 490.434 490.433" xml:space="preserve"><g><path d="M472.003,58.36l-13.132-11.282c-21.798-18.732-54.554-16.644-73.799,4.697L165.39,295.359l-66.312-57.112 c-21.775-18.753-54.536-16.707-73.804,4.611l-11.611,12.848c-9.416,10.413-14.305,24.149-13.595,38.18 c0.717,14.023,6.973,27.188,17.402,36.6l121.553,111.311c10.524,9.883,24.628,15.037,39.044,14.272 c14.416-0.763,27.894-7.386,37.311-18.329l262.245-304.71c9.162-10.646,13.717-24.494,12.661-38.496 C489.229,80.522,482.655,67.512,472.003,58.36z"/></g></svg>
				</button>
			</form>
			
			
			<?php
				if(isset($cars)) {
					if(sizeof($cars) > 0) {
						foreach($cars as $car) { ?>
							<form action="/executive/?entry=car&action=list" method="POST">
								<input type="text" placeholder="Matricule" name="Matricule" value="<?php echo $car['matricule'] ?>" readonly>
								<input type="text" placeholder="Marque" name="Marque" value="<?php echo $car['Nom_marque'] ?>" readonly>
								<input type="text" placeholder="Modele" name="Modele" value="<?php echo $car['Nom_modele'] ?>" readonly>
								<input type="text" placeholder="Date Vignette" name="Date Vignette" onfocus="this.setAttribute('type','date');" onblur="this.setAttribute('type','text');"value="<?php echo $car['date_vignettes'] ?>" readonly>
								<input type="text" placeholder="Date Assurance" name="Date Assurance" onfocus="this.setAttribute('type','date');" onblur="this.setAttribute('type','text');"value="<?php echo $car['date_assurance'] ?>" readonly>
								<input type="text" placeholder="Date Visite" name="Date Visite" onfocus="this.setAttribute('type','date');" onblur="this.setAttribute('type','text');"value="<?php echo $car['date_visit'] ?>" readonly>

								<button type="submit">
									<svg x="0px" y="0px" viewBox="0 0 490.434 490.433" xml:space="preserve"><g><path d="M472.003,58.36l-13.132-11.282c-21.798-18.732-54.554-16.644-73.799,4.697L165.39,295.359l-66.312-57.112 c-21.775-18.753-54.536-16.707-73.804,4.611l-11.611,12.848c-9.416,10.413-14.305,24.149-13.595,38.18 c0.717,14.023,6.973,27.188,17.402,36.6l121.553,111.311c10.524,9.883,24.628,15.037,39.044,14.272 c14.416-0.763,27.894-7.386,37.311-18.329l262.245-304.71c9.162-10.646,13.717-24.494,12.661-38.496 C489.229,80.522,482.655,67.512,472.003,58.36z"/></g></svg>
								</button>
							</form><?php
						}
					}else { ?>
						<span>Pas de Voitures</span>
					<?php }
				}
			?>
		</section>
		
		
				<?php
			if(!($test === null) && !($oper === null)) { ?>
				<aside onclick="this.style.display = 'none';">
					<div data-type="<?php echo $test?'valid':'error';?>">
						<?php
							switch($oper) {
								case 'add' : echo $test?'Voiture ajoutée avec succés':'Erreur lors du traitement de la transaction';
								break;
								case 'del': echo $test?'Voiture supprimée avec succés':'Erreur lors de la suppression Utilisateur';
								break;
							}
						?>
					</div>
				</aside><?php
			}
		?>
		
	</body>
</html>