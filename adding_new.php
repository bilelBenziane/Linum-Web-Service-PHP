<?php 
	error_reporting(0);
	include_once("connect.php");
try
{
		if(isset($_GET['password']))
		{
			//user_db insersion
			$name=$_GET['name'];
			$password=$_GET['password'];
			$phone=$_GET['phone'];
			$address=$_GET['address'];
			$country=$_GET['country'];
			$wilaya=$_GET['wilaya'];
			$commune=$_GET['commune'];
			$longitude=$_GET['longitude'];
			$latitude=$_GET['latitude'];
			$usertype=$_GET['usertype'];
			
	    	$stmt = $dbh->query("INSERT INTO user_db(company_name,password,tel,address,country,wilaya,commune,longitude,latitude,subscription_type) 
			VALUES('$name','$password','$phone','$address','$country','$wilaya','$commune','$longitude','$latitude','$usertype')" );
			$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
			
		}
		else if($_GET['table']=="donation")
		{
			//donation insertion
			$table=$_GET['table'];
    		$name=$_GET['name'];
			$phone=$_GET['phone'];
			$address=$_GET['address'];
			$country=$_GET['country'];
			$wilaya=$_GET['wilaya'];
			$commune=$_GET['commune'];
			$longitude=$_GET['longitude'];
			$latitude=$_GET['latitude'];
			
         	$stmt = $dbh->query("INSERT INTO $table(categorie,tel,address,country,wilaya,commune,longitude,latitude,company_name) 
			VALUES('$name','$phone','$address','$country','$wilaya','$commune','$longitude','$latitude','')" );
			$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

		}
		else
		{
			//gategorie insertion
			$categorie=$_GET['categorie'];
			$img=$_GET['img'];
			$table=$_GET['table'];
    		$name=$_GET['name'];
			$phone=$_GET['phone'];
			$address=$_GET['address'];
			$country=$_GET['country'];
			$wilaya=$_GET['wilaya'];
			$commune=$_GET['commune'];
			$longitude=$_GET['longitude'];
			$latitude=$_GET['latitude'];
			
         	$stmt = $dbh->query("INSERT INTO $table(company_name,tel,address,country,wilaya,commune,longitude,latitude,categorie,img_sources) 
			VALUES('$name','$phone','$address','$country','$wilaya','$commune','$longitude','$latitude','$categorie','$img')" );
			$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

		}
		
			 $stmt = $dbh->query("DELETE FROM signup WHERE tel='$phone' " );
			$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

}
catch(Exception $e){die('Erreur:' .$e->getMessage());}
?>
