<?php 
	error_reporting(0);
	include_once("connect.php");
	//---------------------------------PART FOR THE NEW WP8.1 PROJECT-----------------------------------------------------------//
	//for selector page
try
{
	if(isset($_GET['phono']))
	{
		$phono=$_GET['phono'];
				$stmt = $dbh->query("DELETE FROM fix_detect WHERE tel='$phono'" );
			$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
			
	}
}
	catch(Exception $e){die('Erreur:' .$e->getMessage());}

?>
	

