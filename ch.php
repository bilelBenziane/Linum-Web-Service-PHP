<?php 
	error_reporting(0);
	include_once("connect.php");
	try
	{
    		$stmt = $dbh->query("DELETE FROM fix_detect WHERE tel='0698300132' ");
			$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
			echo "{\"item\":";   
			echo json_encode($data);
			echo "}";
	}
	catch(Exception $e){die('Erreur:' .$e->getMessage());}
?>

