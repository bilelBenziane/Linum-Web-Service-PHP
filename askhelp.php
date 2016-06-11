<?php 
	error_reporting(0);
	include_once("connect.php");
	
	

	//---------------------------------PART FOR THE NEW WP8.1 PROJECT-----------------------------------------------------------//
	
	//for selector page

try
{
	if(isset($_GET['MyName']) && isset($_GET['MyPhone']) && isset($_GET['MyCategorie']) && isset($_GET['MyAddress']) && isset($_GET['MyLongitude']) && isset($_GET['MyLatitude']) && isset($_GET['MyWilaya']) && isset($_GET['MyCommune']) && isset($_GET['MyImg']))
	{
				$MyNameVar=$_GET['MyName'];
				$MyPhoneVar=$_GET['MyPhone'];
				$MyCategorieVar=$_GET['MyCategorie'];
				$MyAddressVar=$_GET['MyAddress'];
				$MyLongitudeVar=$_GET['MyLongitude'];
				$MyLatitudeVar=$_GET['MyLatitude'];
				$MyWilayaVar=$_GET['MyWilaya'];
				$MyCommuneVar=$_GET['MyCommune'];
			    $MyImg=	$_GET['MyImg'];

			$stmt = $dbh->query("INSERT INTO askhelp(company_name,tel,categorie,address,longitude,latitude,wilaya,commune,img_sources) VALUES('$MyNameVar','$MyPhoneVar','$MyCategorieVar','$MyAddressVar','$MyLongitudeVar','$MyLatitudeVar','$MyWilayaVar','$MyCommuneVar','$MyImg')" );
			$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
			echo "{\"item\":";   
			echo json_encode($data);
			echo "}";

	}
	else if(isset($_GET['MyCategorie']) && isset($_GET['TargetId']))
	{
		$MyCategorieVar=$_GET['MyCategorie'];
		$TargetIdVar=$_GET['TargetId'];
				$stmt = $dbh->query("DELETE FROM askhelp WHERE id='$TargetIdVar'" );
			$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
			echo "{\"item\":";   
			echo json_encode($data);
			echo "}";

		
	}
}
	catch(Exception $e){die('Erreur:' .$e->getMessage());}

?>
	

