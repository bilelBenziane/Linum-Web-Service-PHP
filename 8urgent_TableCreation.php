<?php 
try
	{
	$stmt = $dbh->query("CREATE TABLE urgent(
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
						state TEXT,	
						longitude TEXT	
						)" );
    if($stmt)	echo "8 Table urgent Created!";		
	}
	catch(Exception $e)
	{
		echo "8 Table urgent not Created!";
		die('Erreur:' .$e->getMessage());
	}
?>

	