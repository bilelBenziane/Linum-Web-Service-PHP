<?php 
	error_reporting(0);
	include_once("connect.php");
	?><br/><?php
	?><br/><?php
	try
	{
		$stmt = $dbh->query("INSERT INTO Compagnship (company_name,country,wilaya,commune,address,tel,categorie,img_sources,latitude,longitude) 
						 VALUES ('Rabiai Zakaria','Algeria','Boumerdess','Corso','Enface La Mosque','0561620787','Hotel',
						 '/Assets/compagnship_menu_icon/hotel.png','36.7481081932783','3.46221182495356')" );
		if($stmt)	echo "1 compagnship user Added rabiai ";		
	?><br/><?php
	
		$stmt = $dbh->query("INSERT INTO Compagnship (company_name,country,wilaya,commune,address,tel,categorie,img_sources,latitude,longitude) 
						 VALUES ('Benziane Mohammed','Algeria','Algiers','Hammamet','Enface La Mosque','0698300131','Restaurant',
						 '/Assets/compagnship_menu_icon/restaurant.png','36.7481081932783','3.46221182495356')" );
		if($stmt)	echo "2 compagnship user Added Benziane med ";		
	?><br/><?php	

		$stmt = $dbh->query("INSERT INTO Compagnship (company_name,country,wilaya,commune,address,tel,categorie,img_sources,latitude,longitude) 
						VALUES ('Bourouiss Thabet','Algeria','Boumerdess','Corso','Enface La Mosque','0669573431','Coffee House',
						 '/Assets/compagnship_menu_icon/coffee.png','36.7481081932783','3.46221182495356')" );
		if($stmt)	echo "3 compagnship user Added bourouis";	
	?><br/><?php	
		$stmt = $dbh->query("INSERT INTO Compagnship (company_name,country,wilaya,commune,address,tel,categorie,img_sources,latitude,longitude) 
						VALUES ('Benziane Bilel ','Algeria','Boumerdess','Corso','Enface La Mosque','0696719570','Super Market',
						 '/Assets/compagnship_menu_icon/market.png','36.7481081932783','3.46221182495356')" );
		if($stmt)	echo "4 compagnship user Added Benziane bilel";		
	?><br/><?php	
		$stmt = $dbh->query("INSERT INTO Compagnship (company_name,country,wilaya,commune,address,tel,categorie,img_sources,latitude,longitude) 
						VALUES ('Farouk kibeche ','Algeria','Boumerdess','Corso','Enface La Mosque','0773489142','Fast Food',
						 '/Assets/compagnship_menu_icon/fastfood.png','36.7481081932783','3.46221182495356')" );
		if($stmt)	echo "5 compagnship user Added farouk kibeche ";		
	?><br/><?php	
		$stmt = $dbh->query("INSERT INTO Compagnship (company_name,country,wilaya,commune,address,tel,categorie,img_sources,latitude,longitude) 
						VALUES ('Imad Toubal','Algeria','Boumerdess','Corso','Enface La Mosque','0554917978','Bakery',
						 '/Assets/compagnship_menu_icon/bakery.png','36.7481081932783','3.46221182495356')" );
		if($stmt)	echo "6 compagnship user Added imad toubal ";		
	?><br/><?php	
		$stmt = $dbh->query("INSERT INTO Compagnship (company_name,country,wilaya,commune,address,tel,categorie,img_sources,latitude,longitude) 
						VALUES ('Hocine Amiroch','Algeria','Boumerdess','Corso','Enface La Mosque','0560078436','Men Clothes',
						 '/Assets/compagnship_menu_icon/mencloths.png','36.7481081932783','3.46221182495356')" );
		if($stmt)	echo "7 compagnship user Added Hocine Amiroche ";		
	?><br/><?php	
		$stmt = $dbh->query("INSERT INTO Compagnship (company_name,country,wilaya,commune,address,tel,categorie,img_sources,latitude,longitude) 
						VALUES ('Benziane Bilel Abderrahmane','Algeria','Boumerdess','Corso','Enface La Mosque','0560078436','Women Clothes',
						 '/Assets/compagnship_menu_icon/womencloths.png','36.7481081932783','3.46221182495356')" );
		if($stmt)	echo "8 compagnship user Added Benziane Bilel ";		
	}
	catch(Exception $e){die('Erreur:' .$e->getMessage());}
	?><br/><?php
	?><br/><?php
	?><br/><?php
?>