<?php 
	try
	{
	$stmt = $dbh->query("DELETE TABLE fix_detect " );
		
	$stmt = $dbh->query("CREATE TABLE fix_detect(
						id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id),
						company_name TEXT,
						commune TEXT,
						country TEXT,
						wilaya TEXT,
						address TEXT,
						tel TEXT,
						my_tel TEXT,
						categorie TEXT,
						img_sources TEXT,
						latitude TEXT,	
						state TEXT,	
						longitude TEXT	
						)" );
    if($stmt)	echo "9 Table fix_detect Created!";		
	}
	catch(Exception $e)
	{
		echo "9 Table fix_detect not Created!";
		die('Erreur:' .$e->getMessage());
	}
?>

	