<?php 
	error_reporting(0);
	include_once("connect.php");
	try
	{if(isset($_GET['username']) )
		{
			$telp=$_GET['username'];
			$stmt = $dbh->query("SELECT password,tel FROM  user_db WHERE tel='$telp'" );
			$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
			echo "{\"item\":";   
			echo json_encode($data);
			echo "}";
		}
	}
	catch(Exception $e){die('Erreur:' .$e->getMessage());}

	$dater=date("Y/m/d");
			$stmt = $dbh->query("INSERT INTO login_statistics (date)	VALUES('$dater')" );
			$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
	

	