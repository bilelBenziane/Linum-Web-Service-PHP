<?php 
	error_reporting(0);
	include_once("connect.php");
	//---------------------------------PART FOR THE NEW WP8.1 PROJECT-----------------------------------------------------------//
	//for selector page
try
{
	if(isset($_GET['username']) && isset($_GET['password']) && isset($_GET['phone']) && isset($_GET['address']) && isset($_GET['description']) && 
			 isset($_GET['type']) && isset($_GET['country']) && isset($_GET['wilaya']) && isset($_GET['commune']) && isset($_GET['longitude'])
             && isset($_GET['latitude']))
	{
				$UserName=$_GET['username'];
				$PassWord=$_GET['password'];
				$Phone=$_GET['phone'];
				$Address=$_GET['address'];
				$Description=$_GET['description'];
				$Type=$_GET['type'];
				$country=$_GET['country'];
				$wilaya=$_GET['wilaya'];
				$commune=$_GET['commune'];
				$longitude=$_GET['longitude'];
				$latitude=$_GET['latitude'];
				
			$stmt = $dbh->query("INSERT INTO signup(company_name,password,tel,address,description,type,country,wilaya,commune,longitude,latitude) 
			VALUES('$UserName','$PassWord','$Phone','$Address','$Description','$Type','$country','$wilaya','$commune','$longitude','$latitude')" );
			$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
			echo "{\"item\":";   
			echo json_encode($data);
			echo "}";

	}
}
catch(Exception $e){die('Erreur:' .$e->getMessage());}
$dater=date("Y/m/d");
			$stmt = $dbh->query("INSERT INTO signup_statistics (date)	VALUES('$dater')" );
			$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
