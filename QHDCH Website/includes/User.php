<?php
     //**** This is the QHDC User Class Declaration
	 // **** the class i8s an extension of the Class DataObject
	 
require_once("DataObject.class.php");


class User extends DataObject
   {
         protected  $data = array (
	                             "UserID" => "",
								 "Name" => "",
								 "LastName" => "",
								 "Profile" => "",
								 "Username" => "",
								 "Email" => "",
								 "Gender" => "",
								 "City" => "",
								 "Country" => "",
								 "Phone" => "",
								 "State" => "",
								 "ZipCode" => "",
								 "Country" => ""
								 "UserLevel" => "",
								 "Avatar" => "",
								 "IP" => "",
								 "Signup" => "",
								 "LastLogin" => "",
								 "NotesCheck" => "",
								 "Greeting" => "",
								 "Activated" => "",
								 "Language" => ""
	                          );  
        
                         
				
	  public static function getUsers()
	     {
		    $conn = parent::connect();
			$sql = "SELECT * FROM ".TBL_USERS;
			
			try
			   {
			      $st = $conn->prepare($sql);
				  $st->execute();
				  
				  
				  $users = array();
				
				  foreach ($st->fetchAll() as $row)
				     {
						$users[]=$row;
					    //$users[] = new User($row);
					 }
				  //print_r($users);
				   parent::disconnect($conn);	 
				  return array_values($users);
			   }
			catch (PDOException $e)
			   {
			       parent::disconnect($conn);
				  die("Query Failed: ". $e->getMessage());
			   }   
		 }
		 
		 
	  public static function getUser($id)
	     {
		    $conn = parent::connect();
			$sql = "SELECT * FROM ".TBL_USERS." WHERE user_id = :id";
			
			try
			   {
			      $st = $conn->prepare($sql);
				  $st->bindValue(":id", $id, PDO::PARAM_INT);
				  $st->execute();
				  
				  
				  $users = array();
				
				  foreach ($st->fetchAll() as $row)
				     {
						$users[]=$row;
					    //$users[] = new User($row);
					 }
				  //print_r($users);	
				   parent::disconnect($conn); 
				  return array_values($users);
			   }
			catch (PDOException $e)
			   {
			       parent::disconnect($conn);
				  die("Query Failed: ". $e->getMessage());
			   }   
		 }
		 
	   public static function updateUser($data)
	     {
		   $conn = parent::connect();
		   $sql = "UPDATE ".TBL_USERS." SET user_id = '".$data[1]."', name = '".$data[2]."', last = '".$data[3]."', profile = '".
		           $data[4]."', username = '".$data[5]."', email = '".$data[6]."', password = '".$data[7]."', gender = '".$data[8]."' , 
				   City = '".$data[9]."', country = ".$data[10].", state = '".$data[11]."', phone = '".$data[12]."', userlevel = '".
		           $data[13]."', avatar = '".$data[14]."', ip = '".$data[15]."', signup = '".$data[16]."', lastlogin = '".$data[17]."' , 
				   notescheck = '".$data[18]."', greeting = ".$data[19]."', activated = '".$data[20]."' , lang = '".$data[21]"' WHERE user_id = '".$data[0]."'"; 
				   
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
		 
	  public static function addUser($data)
	     {
		    $conn = parent::connect();
			$sql = "INSERT INTO ".TBL_USERS." (user_id,name,Name,last,profile,username,email,password,gender,City,country,state,phone,userlevel,
												avatar,ip,signup,lastlogin,notescheck,greeting,activated,lang)
                 VALUES(
                  '" .$data[0]."', '".$data[1]."', '".$data[2]."', '".$data[3]."', '".$data[4]."', '".$data[5]."', '".$data[6]."' ,  
                  '" .$data[7]."', '".$data[8]."', '".$data[9]."', '".$data[10]."', '".$data[11].$data[12]."', '".$data[13]."', '".$data[14]."', 
				  '".$data[15]."', '".$data[16]."', '".$data[17]."', '".$data[18]."' ,'" .$data[19]."', '".$data[20]."', '".$data[21]."')";
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
		 
	 public static function retrieveUser($column, $value)
	     {
		    $conn = parent::connect();
			$sql = "SELECT * FROM ".TBL_USERS." WHERE ".$column." = :value";
			
			try
			   {
			      $st = $conn->prepare($sql);
				  $st->bindValue(":value", $value, PDO::PARAM_STR);
				  $st->execute();
				  
				  
				  $users = array();
				
				  foreach ($st->fetchAll() as $row)
				     {
						$users[]=$row;
					    //$users[] = new User($row);
					 }
				  //print_r($users);
				   parent::disconnect($conn);	 
				  return array_values($clients);
			   }
			catch (PDOException $e)
			   {
			      parent::disconnect($conn);
				  die("Query Failed: ". $e->getMessage());
			   }   
		 }
         
         public static function updateUserData($column, $value, $userid)
	     {
		    $conn = parent::connect();
			$sql = "UPDATE ".TBL_USERS." SET ".$column." = :value  WHERE user_id = '".$userid."'";
			
			try
			   {
			      $st = $conn->prepare($sql);
				  $st->bindValue(":value", $value, PDO::PARAM_STR);
				  $st->execute();
				  
				  parent::disconnect($conn);	 
			   }
			catch (PDOException $e)
			   {
			      parent::disconnect($conn);
				  die("Query Failed: ". $e->getMessage());
			   }   
		 }
        
      
   }

?>