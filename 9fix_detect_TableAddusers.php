<?php 
	?><br/><?php
	?><br/><?php
	try
	{
	
		$stmt = $dbh->query("INSERT INTO fix_detect(company_name,country,wilaya,commune,address,tel,my_tel,categorie,img_sources,latitude,longitude,state) 
						 VALUES ('Benziane Tayeb','Algeria','Oran','Arzew','Enface La Mosque','0698300132','0000','Hous hold',
						 '/Assets/reparation_menu_icon/house_hold.png','36.7481081932783','3.46221182495356','stopped')" );
		if($stmt)	echo "1 fix_detect user Added";		
	}
	catch(Exception $e){die('Erreur:' .$e->getMessage());}
	?><br/><?php
	?><br/><?php
	?><br/><?php
?>