<?php 
	error_reporting(0);
	include_once("connect.php");
	try
	{
		if(isset($_GET['categorie']))
		{
			$categorie=$_GET['categorie'];
			//UPDATE urgent SET prix = 10, nbre_joueurs_max = 32 WHERE ID = 51
			$stmt = $dbh->query("SELECT longitude,latitude,tel,my_tel FROM fix_detect WHERE categorie='$categorie' " );
			$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
			echo "{\"item\":";   
			echo json_encode($data);
			echo "}";
		}
	}
	catch(Exception $e){die('Erreur:' .$e->getMessage());}
?>