<?php 
	?><br/><?php
	?><br/><?php
	try
	{
		$stmt = $dbh->query("INSERT INTO help (company_name,country,wilaya,commune,address,tel,categorie,img_sources,latitude,longitude) 
	    					 VALUES ('Benziane Bilel','Algeria','Oran','Arzew','Enface La Mosque','0696719570','Cleaning',
		    				 '/Assets/help_menu_icon/cleaning.png','36.7481081932783','3.46221182495356')" );
		if($stmt)	echo "1 helper added cleaning";		
	}
	catch(Exception $e){die('Erreur:' .$e->getMessage());}
	?><br/><?php
	try
	{
		$stmt = $dbh->query("INSERT INTO help (company_name,country,wilaya,commune,address,tel,categorie,img_sources,latitude,longitude) 
						 VALUES ('Benziane Mohammed','Algeria','Oran','Arzew','Enface La Mosque','0698300131','Run Errands',
						 '/Assets/help_menu_icon/run_errands.png','36.7481081932783','3.46221182495356')" );
		if($stmt)	echo "2 helper Added run errans";			
	}
	catch(Exception $e){die('Erreur:' .$e->getMessage());}
	?><br/><?php
	try
	{
		$stmt = $dbh->query("INSERT INTO help (company_name,country,wilaya,commune,address,tel,categorie,img_sources,latitude,longitude) 
						 VALUES ('Thabet Bourouiss','Algeria','Oran','Arzew','Enface La Mosque','+213696719570','Cooking',
						 '/Assets/help_menu_icon/cooking.png','36.7481081932783','3.46221182495356')" );
		if($stmt)	echo "3 helper Added cooking";		
	}
	catch(Exception $e){die('Erreur:' .$e->getMessage());}
	?><br/><?php
	try
	{
		$stmt = $dbh->query("INSERT INTO help (company_name,country,wilaya,commune,address,tel,categorie,img_sources,latitude,longitude) 
						 VALUES ('Thabet Bourouiss','Algeria','Oran','Arzew','Enface La Mosque','0698300131','Helping with medicines',
						 '/Assets/help_menu_icon/medicines.png','36.7481081932783','3.46221182495356')" );
		if($stmt)	echo "4 helper Added medecines";		
	}
	catch(Exception $e){die('Erreur:' .$e->getMessage());}
	?><br/><?php
	try
	{
		$stmt = $dbh->query("INSERT INTO help (company_name,country,wilaya,commune,address,tel,categorie,img_sources,latitude,longitude) 
						 VALUES ('Rabiai Zakaria','Algeria','Oran','Arzew','Enface La Mosque','0696719570','Walking olds',
						 '/Assets/help_menu_icon/walking_olds.png','36.7481081932783','3.46221182495356')" );
		if($stmt)	echo "5 helper Added walking olds";		
	}
	catch(Exception $e){die('Erreur:' .$e->getMessage());}
	?><br/><?php
	try
	{
		$stmt = $dbh->query("INSERT INTO help (company_name,country,wilaya,commune,address,tel,categorie,img_sources,latitude,longitude) 
						 VALUES ('Rabiai Zakaria','Algeria','Oran','Arzew','Enface La Mosque','0696719570','Walking olds',
						 '/Assets/help_menu_icon/walking_olds.png','36.7481081932783','3.46221182495356')" );
		if($stmt)	echo "6 helper Added walking olds";		
	}
	catch(Exception $e){die('Erreur:' .$e->getMessage());}
	?><br/><?php
	?><br/><?php
	?><br/><?php
?>