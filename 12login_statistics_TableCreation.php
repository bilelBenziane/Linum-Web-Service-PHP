<?php 
	try
	{
		$stmt = $dbh->query("CREATE TABLE login_statistics(
							id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id),
							date TEXT,
							inc INT							
							)" );
		if($stmt)	echo "12 table login statistics!";		
	}
	catch(Exception $e)
	{
			echo "11 table signup statistics!";
			die('Erreur:' .$e->getMessage());
	}
?>