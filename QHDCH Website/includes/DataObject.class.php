<?php

	//** This is the Class Data Object Declaration
   
   require_once("config.php");
   
   //** Class declaration
   
   abstract class DataObject
	   {
	   		 protected $data = array();
		 
			 public function _construct($data)
				{
				  
				   foreach ($data as $key => $value)
					  {
						 if (array_key_exists($key, $this->data))
							$this->data[$key]=$value;
					  }
				}
			
			public function getValue($field)
			   {
				  if (array_key_exists($field, $this->data))
					 {
						return $this->data[$field];
					 }
				  else
					 {
						file_put_contents('../logs/DOErrors.txt', "Field not Found", FILE_APPEND);
						exit();
					 }
			   }
		   
			public function getValueEncoded($field)
			   {
				  return htmlspecialchars( $this->getValue($field));
			   }
		   
			protected function connect()
			   {
				  try 
					 {
						$conn = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
						$conn->setAttribute( PDO::ATTR_PERSISTENT, true);
						$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					 }
				  catch(PDOException $e)
					 {
						file_put_contents('../logs/DOErrors.txt', $e->getMessage(), FILE_APPEND);
						exit();
					 }
				  return $conn;
			   }
		 
			 protected function disconnect($conn)
			   {
				  $conn="";
			   }  
	   }

?>