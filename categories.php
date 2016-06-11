<?php 
	error_reporting(0);
	include_once("connect.php");
	try
	{
		if(isset($_GET['table'])  )
		{
			$table=$_GET['table'];

			$stmt = $dbh->query("SELECT * FROM $table  GROUP BY categorie" );
			$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
			echo "{\"item\":";   
			echo json_encode($data);
			echo "}";
		}
	}
	catch(Exception $e){die('Erreur:' .$e->getMessage());}
?>
	

	