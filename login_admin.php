<?php 
	error_reporting(0);
	include_once("connect.php");
	try
	{if(isset($_GET['username']) )
		{
			$user=$_GET['username'];
			$stmt = $dbh->query("SELECT password,username FROM  admin WHERE username='$user'" );
			$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
			echo "{\"item\":";   
			echo json_encode($data);
			echo "}";
		}
	}
	catch(Exception $e){die('Erreur:' .$e->getMessage());}
?>
	

	