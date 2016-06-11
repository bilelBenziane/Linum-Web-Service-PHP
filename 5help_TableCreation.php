<?php 
	try
	{
	$stmt = $dbh->query("CREATE TABLE help(
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
	    if($stmt)	echo "5 Table help Created!";		
	}
	catch(Exception $e)
	{ 
		echo "Table help not Created!";
		die('Erreur:' .$e->getMessage());	
	}
?>

	