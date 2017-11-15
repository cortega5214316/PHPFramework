<?php

	include_once("../includes/config.php");
	include_once("includes/encryption/Key.php");
	include_once("includes/encryption/Salt.php");
	include_once("includes/encryption/Core.php");
	include_once("includes/encryption/Encoding.php");

	final class dbCon
	{
	
		private $DBH = null;
		private $STH = null;
		
		public function __construct($dsn, $username, $password)
        	{
             	try 
				 {
					$this->DBH = new PDO($dsn, $username, $password);
					$this->DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				 }
			  	catch(PDOException $e)
				 {
				 	file_put_contents('../logs/PDOErrors.txt', $e->getMessage(), FILE_APPEND);
				 }
           	}
			
		public function __construct()
        	{
             	try 
				 {
					$this->DBH = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
					$this->DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				 }
			  	catch(PDOException $e)
				 {
				 	file_put_contents('../logs/PDOErrors.txt', $e->getMessage(), FILE_APPEND);
				 }
           	}	
			
		public prepareQuery($query)
		{
			if ($this->DBH != null)
			{
				$this->STH = $this->DBH->prepare($query);
			}
			else
			{
				file_put_contents('../logs/PDOErrors.txt', "Error: DataBase Handler is Null...", FILE_APPEND);
			}
		}
			
		public getDBHandler()
			{
				return $this->DBH;
			}
	
		public function __destruct()
			{
				// Closes the Connection
				$this->DBH = null;
				$this->STH = null;
			}
	
	}

?>
