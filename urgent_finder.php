<?php 
	error_reporting(0);
	include_once("connect.php");
	try
	{
		if(isset($_GET['longitude']) && isset($_GET['latitude']) && isset($_GET['phone'])&& isset($_GET['categorie']) )
		{
			$longitude=$_GET['longitude'];
			$latitude=$_GET['latitude'];
			$phone=$_GET['phone'];
			$categorie=$_GET['categorie'];
			//$repare_phone=$_GET['longitude'];
    		$stmt = $dbh->query("INSERT INTO fix_detect (tel,categorie,latitude,longitude) 
								 VALUES ('$phone','$categorie','$latitude','$longitude')");
		}
		/*else if(isset($_GET['longitude']) && isset($_GET['latitude']))
		{
			
		}*/
	}
	catch(Exception $e){die('Erreur:' .$e->getMessage());}
?>

