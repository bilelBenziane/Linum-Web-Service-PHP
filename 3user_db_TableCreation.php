<?php 
	try
	{
	$stmt = $dbh->query("CREATE TABLE user_db(
						id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id),
						company_name TEXT,
						commune TEXT,
						country TEXT,
						wilaya TEXT,
						address TEXT,
						tel TEXT,
						subscription_type TEXT,
						subscription_status TEXT,
						latitude TEXT,	
						longitude TEXT,
						password TEXT							
						)" );
    if($stmt)	echo "3 Table user_db Created!";		
	}
	catch(Exception $e)
	{
		echo "3 Table user_db not Created!";
		die('Erreur:' .$e->getMessage());
	}
?>