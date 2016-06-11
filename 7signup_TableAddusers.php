<?php 
	try
	{
		?><br/><?php
		?><br/><?php
		$stmt = $dbh->query("INSERT INTO donation (company_name,country,wilaya,commune,address,tel,categorie,img_sources,latitude,longitude) 
						 VALUES ('Maladies rares','Algeria','Oran','Arzew','Enface La Mosque','0696719570','association',
						 '/Assets/association_menu_icon/maladi.png','36.7481081932783','3.46221182495356')" );
		if($stmt)	echo "1 donation user Added amnisti ";		
		?><br/><?php
		$stmt = $dbh->query("INSERT INTO donation (company_name,country,wilaya,commune,address,tel,categorie,img_sources,latitude,longitude) 
						 VALUES ('Amnistie internationale','Algeria','Oran','Arzew','Enface La Mosque','0698300131','association',
						 '/Assets/association_menu_icon/amnisti.png','36.7481081932783','3.46221182495356')" );
		if($stmt)	echo "2 donation user Added maladi";
		?><br/><?php
		?><br/><?php
		?><br/><?php
	}
	catch(Exception $e){die('Erreur:' .$e->getMessage());}
?>