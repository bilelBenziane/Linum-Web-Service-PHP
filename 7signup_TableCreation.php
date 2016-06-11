<?php 
	try
	{
	$stmt = $dbh->query("CREATE TABLE signup(
						id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id),
						company_name TEXT,
						commune TEXT,
						country TEXT,
						wilaya TEXT,
						address TEXT,
						tel TEXT,
						categorie TEXT,
						latitude TEXT,	
						longitude TEXT,
						password TEXT,
						type TEXT,
						description TEXT						
						)" );
	    if($stmt)	echo "7 Table signup Created!";		
	}
	catch(Exception $e)
	{ 
		echo "Table signup not Created!";
		die('Erreur:' .$e->getMessage());	
	}
?>

	