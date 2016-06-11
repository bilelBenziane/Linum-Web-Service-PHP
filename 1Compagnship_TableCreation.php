<?php 
	error_reporting(0);
	include_once("connect.php");
	try
	{
	$stmt = $dbh->query("CREATE TABLE Compagnship(
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
    if($stmt)	echo "1 Table compagnship Created!";		
	}
	catch(Exception $e)
	{
		echo "1 Table compagnship not Created!";	
		die('Erreur:' .$e->getMessage());
	}
?>