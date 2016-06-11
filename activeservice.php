<?php 
	error_reporting(0);
	include_once("connect.php");
	try
	{
		if(isset($_GET['phone']) && isset($_GET['side']))
		{
			$telp=$_GET['phone'];
			$stmt = $dbh->query("SELECT * FROM urgent WHERE tel='$telp'" );
			$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
			echo "{\"item\":";   
			echo json_encode($data);
			echo "}";	
		}
		else if(isset($_GET['phone']))
		{
			$telp=$_GET['phone'];
			$stmt = $dbh->query("UPDATE urgent SET state='stopped' WHERE tel='$telp'" );
			$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
			echo "done";
		}
	}
	catch(Exception $e){die('Erreur:' .$e->getMessage());}
?>