<?php 
	error_reporting(0);
	include_once("connect.php");
	try
	{
		if(isset($_GET['table'])  )
		{
			$table=$_GET['table'];
			$passCategorieVar=$_GET['passCategorie'];

			$stmt = $dbh->query("SELECT * FROM $table  " );
			$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
			echo "{\"item\":";   
			echo json_encode($data);
			echo "}";
		}
	}
	catch(Exception $e){die('Erreur:' .$e->getMessage());}
?>
	

	