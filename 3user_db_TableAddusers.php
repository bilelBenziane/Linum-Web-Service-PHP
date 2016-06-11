<?php 
	?><br/><?php
	?><br/><?php
	try
	{
		$stmt = $dbh->query("INSERT INTO user_db (company_name,country,wilaya,commune,address,tel,subscription_type,subscription_status,latitude,
        					  longitude,password) 
		    	     		 VALUES ('Benziane Mohammed','Algeria','Oran','Arzew','Enface La Mosque','0698300131',
			    			 'free','ok','36.7481081932783','3.46221182495356','1980')" );
		if($stmt)	echo "1 user_db user  Added : 0698300131  : 1980 ";
	}
	catch(Exception $e){die('Erreur:' .$e->getMessage());}	
	?><br/><?php

	try
	{
		$stmt = $dbh->query("INSERT INTO user_db (company_name,country,wilaya,commune,address,tel,subscription_type,subscription_status,latitude,
											  longitude,password) 
						 VALUES ('Benziane Bilel','Algeria','Oran','Arzew','Enface La Mosque','0696719570',
						 'free','ok','36.7481081932783','3.46221182495356','imagine1980')" );
		if($stmt)	echo "2 user_db user Added 0698300131 : imagine1980";
	}
	catch(Exception $e){die('Erreur:' .$e->getMessage());}
	?><br/><?php
	?><br/><?php
	?><br/><?php
?>