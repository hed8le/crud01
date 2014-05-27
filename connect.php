<?php 
	$server='mysql:dbname=kegler;host=localhost';
	$user='root';
	$pw='root';
	
	try {
		$db=new PDO($server,$user,$pw);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		error_log($e->getMessage());
		die("Datenbankverbindung tut nicht.");
	}
?>