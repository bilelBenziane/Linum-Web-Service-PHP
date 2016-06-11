<?php 
	try
	{
	$stmt = $dbh->query("CREATE TABLE admin(
						id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id),
						username TEXT,
						password TEXT							
						)" );
    if($stmt)	echo "10 table admin Created!";		
	}
	catch(Exception $e)
	{
		echo "10 table admin not Created!";
		die('Erreur:' .$e->getMessage());
	}
?>