<?php
     //**** This is the PCER Clients Class Declaration
	 
require_once("DataObject.class.php");


class Client extends DataObject
   {
         protected  $data = array (
	                             "ClientNo" => "",
								 "Company" => "",
								 "Name" => "",
								 "LastName" => "",
								 "Address" => "",
								 "Phone1" => "",
								 "Phone2" => "",
								 "Email" => "",
								 "City" => "",
								 "State" => "",
								 "ZipCode" => "",
								 "Country" => ""
	                          );  
        
                         
				
	  public static function getClients()
	     {
		    $conn = parent::connect();
			$sql = "SELECT * FROM ".TBL_PCER_CLIENTS;
			
			try
			   {
			      $st = $conn->prepare($sql);
				  $st->execute();
				  
				  
				  $clients = array();
				
				  foreach ($st->fetchAll() as $row)
				     {
						$clients[]=$row;
					    //$clients[] = new Client($row);
					 }
				  //print_r($clients);
				   parent::disconnect($conn);	 
				  return array_values($clients);
			   }
			catch (PDOException $e)
			   {
			       parent::disconnect($conn);
				  die("Query Failed: ". $e->getMessage());
			   }   
		 }
		 
		 
	  public static function getClient($id)
	     {
		    $conn = parent::connect();
			$sql = "SELECT * FROM ".TBL_PCER_CLIENTS." WHERE ClientNo = :id";
			
			try
			   {
			      $st = $conn->prepare($sql);
				  $st->bindValue(":id", $id, PDO::PARAM_INT);
				  $st->execute();
				  
				  
				  $clients = array();
				
				  foreach ($st->fetchAll() as $row)
				     {
						$clients[]=$row;
					    //$clients[] = new Client($row);
					 }
				  //print_r($clients);	
				   parent::disconnect($conn); 
				  return array_values($clients);
			   }
			catch (PDOException $e)
			   {
			       parent::disconnect($conn);
				  die("Query Failed: ". $e->getMessage());
			   }   
		 }
		 
	   public static function updateClient($data)
	     {
		   $conn = parent::connect();
		   $sql = "UPDATE ".TBL_PCER_CLIENTS." SET Company = '".$data[1]."', Name = '".$data[2]."', LastName = '".$data[3]."', Address = '".
		           $data[4]."', Phone1 = '".$data[5]."', Phone2 = '".$data[6]."', Email = '".$data[7]."', City = '".$data[8]."' , 
				   State = '".$data[9]."', ZipCode = ".$data[10].", Country = '".$data[11]."' WHERE ClientNo = '".$data[0]."'"; 
				   
		   //printf("this is the query %s", $sql);
		   //print_r($data);             
			try
			   {
			      $st = $conn->prepare($sql);
				  $st->execute();
				  
				  parent::disconnect($conn);
				  return (1);
			   }	   
			      
			catch (PDOException $e)
			   {
			      parent::disconnect($conn);
				  die("Query Failed: ". $e->getMessage());
			   }   
		 }
		 
	  public static function addClient($data)
	     {
		    $conn = parent::connect();
			$sql = "INSERT INTO ".TBL_PCER_CLIENTS." (ClientNo,Company,Name,LastName,Address,Phone1,Phone2,Email,City,State,ZipCode,Country)
                 VALUES(
                  '" .$data[0]."', '".$data[1]."', '".$data[2]."', '".$data[3]."', '".$data[4]."', '".$data[5]."', '".$data[6]."' ,  
                  '" .$data[7]."', '".$data[8]."', '".$data[9]."', '".$data[10]."', '".$data[11]."')";
			//printf("this is the query %s", $sql);
		    //print_r($data);   
			try
			   {
			      $st = $conn->prepare($sql);
				  $st->execute();
				  
				   parent::disconnect($conn);
				  return (1);
			   }
			catch (PDOException $e)
			   {
			       parent::disconnect($conn);
				  die("Query Failed: ". $e->getMessage());
			   }   
		 }
		 
	 public static function retrieveClient($column, $value)
	     {
		    $conn = parent::connect();
			$sql = "SELECT * FROM ".TBL_PCER_CLIENTS." WHERE ".$column." = :value";
			
			try
			   {
			      $st = $conn->prepare($sql);
				  $st->bindValue(":value", $value, PDO::PARAM_STR);
				  $st->execute();
				  
				  
				  $clients = array();
				
				  foreach ($st->fetchAll() as $row)
				     {
						$clients[]=$row;
					    //$clients[] = new Client($row);
					 }
				  //print_r($clients);
				   parent::disconnect($conn);	 
				  return array_values($clients);
			   }
			catch (PDOException $e)
			   {
			      parent::disconnect($conn);
				  die("Query Failed: ". $e->getMessage());
			   }   
		 }
         
         
        
      
   }

?>