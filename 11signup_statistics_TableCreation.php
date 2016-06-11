<?php 
	try
	{
		$stmt = $dbh->query("CREATE TABLE signup_statistics(
							id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id),
							date TEXT,
							inc INT							
							)" );
		if($stmt)	echo "11 table signup statistics!";		
	}
	catch(Exception $e)
	{
			echo "11 table signup statistics!";
			die('Erreur:' .$e->getMessage());
	}
?>