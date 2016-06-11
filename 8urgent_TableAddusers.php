<?php 
	?><br/><?php
	?><br/><?php	?><br/><?php
	try
	{
		$stmt = $dbh->query("INSERT INTO urgent (company_name,country,wilaya,commune,address,tel,categorie,img_sources,latitude,longitude,state) 
						 VALUES ('Benziane Boukhatem','Algeria','Oran','Arzew','Enface La Mosque','+213696719570','Car Electric',
						 '/Assets/reparation_menu_icon/car_electric.png','36.7481081932783','3.46221182495356','active')" );
		if($stmt)	echo "1 urgent user  Added";		
	?><br/><?php
	
		$stmt = $dbh->query("INSERT INTO urgent (company_name,country,wilaya,commune,address,tel,categorie,img_sources,latitude,longitude,state) 
						 VALUES ('Benziane Tayeb','Algeria','Oran','Arzew','Enface La Mosque','+213696719570','Car Mechanic',
						 '/Assets/reparation_menu_icon/car_mechanic.png','36.7481081932783','3.46221182495356','active')" );
		if($stmt)	echo "2 urgent user Added";		
	?><br/><?php	

		$stmt = $dbh->query("INSERT INTO urgent (company_name,country,wilaya,commune,address,tel,categorie,img_sources,latitude,longitude,state) 
						 VALUES ('Benziane Tayeb','Algeria','Oran','Arzew','Enface La Mosque','0698300131','Hous hold',
						 '/Assets/reparation_menu_icon/house_hold.png','36.7481081932783','3.46221182495356','stopped')" );
		if($stmt)	echo "3 urgent user Added";		
	}
	catch(Exception $e){die('Erreur:' .$e->getMessage());}
	?><br/><?php
	?><br/><?php
	?><br/><?php
?>