<?php

	include_once("config.php");
	
	try 
     {
	    $conn = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
		$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 }
  catch(PDOException $e)
     {
	    //die("Connection Failed : ".$e->getMessage());
		echo 'Connection failed: ' . $e->getMessage();
	 }
?>
