<?php 
	?><br/><?php
	?><br/><?php
	try
	{
		$stmt = $dbh->query("INSERT INTO admin(username,password) VALUES ('imagine-admine','1980')" );
		if($stmt)	echo "1 admine created ";
	}
	catch(Exception $e){die('Erreur:' .$e->getMessage());}	
	?><br/><?php
	?><br/><?php
	?><br/><?php
?>