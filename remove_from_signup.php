<?php 
	error_reporting(0);
	include_once("connect.php");
	try
	{
			$phone=$_GET['phone'];
			$table=$_GET['table'];
			$stmt = $dbh->query("DELETE FROM $table WHERE tel='$phone' ");
			$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	catch(Exception $e){die('Erreur:' .$e->getMessage());}
?>
	

	