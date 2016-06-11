<?php 
	include_once('connect.php');
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
		$stmt = $dbh->query("INSERT INTO signup_statistics (date,inc) VALUES ('2016/01/21','3')" );
				$stmt = $dbh->query("INSERT INTO signup_statistics (date,inc) VALUES ('2016/01/22','3')" );
				$stmt = $dbh->query("INSERT INTO signup_statistics (date,inc) VALUES ('2016/01/23','3')" );
				$stmt = $dbh->query("INSERT INTO signup_statistics (date,inc) VALUES ('2016/01/24','3')" );
				$stmt = $dbh->query("INSERT INTO signup_statistics (date,inc) VALUES ('2016/01/25','3')" );
				$stmt = $dbh->query("INSERT INTO signup_statistics (date,inc) VALUES ('2016/01/26','3')" );
		$stmt = $dbh->query("INSERT INTO signup_statistics (date,inc) VALUES ('2016/01/27','3')" );			
		$stmt = $dbh->query("INSERT INTO signup_statistics (date,inc) VALUES ('2016/01/28','3')" );
		$stmt = $dbh->query("INSERT INTO signup_statistics (date,inc) VALUES ('2016/01/29','3')" );
		$stmt = $dbh->query("INSERT INTO signup_statistics (date,inc) VALUES ('2016/01/30','3')" );		
	}
	catch(Exception $e){die('Erreur:' .$e->getMessage());}	
	?><br/><?php
	?><br/><?php
	?><br/><?php
?>