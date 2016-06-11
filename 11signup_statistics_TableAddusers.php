<?php 
	?><br/><?php
	?><br/><?php
	try
	{
		$stmt = $dbh->query("INSERT INTO signup_statistics (date,inc) VALUES ('2016/01/00','1')" );
		if($stmt)	echo "1 signup statistics value ";
		
		$stmt = $dbh->query("INSERT INTO signup_statistics (date,inc) VALUES ('2016/01/05','3')" );
		if($stmt)	echo "2 signup statistics value ";
		
		$stmt = $dbh->query("INSERT INTO signup_statistics (date,inc) VALUES ('2016/01/10','6')" );
		if($stmt)	echo "3 signup statistics value ";

		$stmt = $dbh->query("INSERT INTO signup_statistics (date,inc) VALUES ('2016/01/15','9')" );
		if($stmt)	echo "4 signup statistics value ";

		$stmt = $dbh->query("INSERT INTO signup_statistics (date,inc) VALUES ('2016/01/20','3')" );
		if($stmt)	echo "5 signup statistics value ";
	}
	catch(Exception $e){die('Erreur:' .$e->getMessage());}	
	?><br/><?php
	?><br/><?php
	?><br/><?php
?>