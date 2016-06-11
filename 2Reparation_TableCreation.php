<?php 
	try
	{
	$stmt = $dbh->query("CREATE TABLE Reparation(
						id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id),
						company_name TEXT,
						commune TEXT,
						country TEXT,
						wilaya TEXT,
						address TEXT,
						tel TEXT,
						categorie TEXT,
						img_sources TEXT,
						latitude TEXT,	
						longitude TEXT	
						)" );
    if($stmt)	echo "2 Table Reparation Created!";		
	}
	catch(Exception $e)
	{
		echo "2 Table Reparation not Created!";
		die('Erreur:' .$e->getMessage());
	}
?>