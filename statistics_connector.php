<?php

	//$dbh=new PDO("mysql:host=localhost;dbname=linum2","root","");
	error_reporting(0);
	include_once("connect.php");
	$table=$_GET['table'];
	$stmt = $dbh->query("SELECT id,inc,date FROM  $table GROUP BY date");
			$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
			echo "{\"item\":";   
			echo json_encode($data);
			echo "}";
	
	/*
		$dater=date("Y/m/d");
		$stmt = $dbh->query("INSERT  INTO signup_state (stro) VALUES('$dater') ");
				$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
	*/
?>