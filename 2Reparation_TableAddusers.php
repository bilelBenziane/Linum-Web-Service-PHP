<?php 
	?><br/><?php
	?><br/><?php
	try
	{
		$stmt = $dbh->query("INSERT INTO Reparation (company_name,country,wilaya,commune,address,tel,categorie,img_sources,latitude,longitude) 
						 VALUES ('Benziane Bilel','Algeria','Oran','Arzew','Enface La Mosque','0696719570','Car Electric',
						 '/Assets/reparation_menu_icon/car_electric.png','36.7481081932783','3.46221182495356')" );
		if($stmt)	echo "1 reparation user  Added Bilel Benziane ";		
		?><br/><?php
	
		$stmt = $dbh->query("INSERT INTO Reparation (company_name,country,wilaya,commune,address,tel,categorie,img_sources,latitude,longitude) 
						 VALUES ('Benziane Mohammed','Algeria','Oran','Arzew','Enface La Mosque','0698300131','Car Mechanic',
						 '/Assets/reparation_menu_icon/car_mechanic.png','36.7481081932783','3.46221182495356')" );
		if($stmt)	echo "2 reparation user Added Benziane med ";		
		?><br/><?php	

		$stmt = $dbh->query("INSERT INTO Reparation (company_name,country,wilaya,commune,address,tel,categorie,img_sources,latitude,longitude) 
						 VALUES ('Rabiai Zakaria','Algeria','Oran','Arzew','Enface La Mosque','0561620787','House hold',
						 '/Assets/reparation_menu_icon/house_hold.png','36.7481081932783','3.46221182495356')" );
		if($stmt)	echo "3 reparation user Added Rabiai Zakaria ";	
		?><br/><?php	
	
		$stmt = $dbh->query("INSERT INTO Reparation (company_name,country,wilaya,commune,address,tel,categorie,img_sources,latitude,longitude) 
						 VALUES ('Rorouis Thabet','Algeria','Oran','Arzew','Enface La Mosque','0669573431','Mobile Repair',
						 '/Assets/reparation_menu_icon/mobile_repair.png','36.7481081932783','3.46221182495356')" );
		if($stmt)	echo "4 reparation user Added Thabet Bourouiss ";			
		?><br/><?php	
		
		$stmt = $dbh->query("INSERT INTO Reparation (company_name,country,wilaya,commune,address,tel,categorie,img_sources,latitude,longitude) 
						 VALUES ('Kibeche Farouk','Algeria','Oran','Arzew','Enface La Mosque','0669573431','Computer Repair',
						 '/Assets/reparation_menu_icon/computer_repair.png','36.7481081932783','3.46221182495356')" );
		if($stmt)	echo "5 reparation user Added Farouk Kibeche ";			
		?><br/><?php	
	
		$stmt = $dbh->query("INSERT INTO Reparation (company_name,country,wilaya,commune,address,tel,categorie,img_sources,latitude,longitude) 
						 VALUES ('Imad Toubale','Algeria','Oran','Arzew','Enface La Mosque','0669573431','Roof Repair',
						 '/Assets/reparation_menu_icon/roof_repair.png','36.7481081932783','3.46221182495356')" );
		if($stmt)	echo "6 reparation user Added Imad Toubal ";			
		?><br/><?php	
			
	}
	catch(Exception $e){die('Erreur:' .$e->getMessage());}
	?><br/><?php
	?><br/><?php
	?><br/><?php
?>

	

	