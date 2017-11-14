<?php

	 //**** This is the QHC User Class Declaration
	 
	require_once("DataObject.class.php");
    require_once("Encrypt.php")
	include_once("includes/encryption/Key.php");
	include_once("includes/encryption/Salt.php");
	include_once("includes/encryption/Core.php");
	include_once("includes/encryption/Encoding.php");

	class User extends DataObject
		{
			protected  $data = array (
	                             "UserName" => "",
								 "Name" => "",
								 "LastName" => "",
								 "Password" => "",
								 "Email" => "",
								 "DOB" => "",
								 "Gender" => "",
                                 "Nick" => "",
                                 "Avatar" => "",
                                 "Phone" => "",
                                 "Address" => "",
								 "City" => "",
								 "State" => "",
								 "ZipCode" => "",
								 "Country" => "",
                                 "Confirmed" => "",
                                 "Level" => "",
                                 "Salt" => "",
                                 "Key" => ""
	                          );
			
              function __construct($name, $password, $new = true)
                  {
                    $data['UserName'] = $name;
                    $data['Password'] = $password;
                    $data['Confirmed'] = !$new;
                  }	
              
              function __construct($user, $name, $last, $password, $email, $dob, $gender, $new = true)
                  {
                    $data['UserName'] = $user;
                    $data['Name'] = $name;
                    $data['LastName'] = $last;
                    $data['Password'] = $password;
                    $data['Email'] = $email;
                    $data['DOB'] = $dob;
                    $data['Gender'] = $gender;
                    $data['Confirmed'] = !$new;
                  }	
                  		  
              public function updatePassword($oldPassword, $newPassword)
                {
        
                }
             
              public function setUser($user)
                {
                    $data['UserName'] = $user;
                }
                
              public function setNick($nick)
                {
                    $data['Nick'] = $nick;
                }
                
              public function setPhone($phone)
                {
                    $data['Phone'] = $phone;
                }
                
              public function setAddress($addres)
                {
                    $data['Address'] = $addres;
                }
                
              public function setCity($city)
                {
                    $data['City'] = $city;
                }
                
              public function setState($state)
                {
                    $data['State'] = $state;
                }
                
              public function setZip($zip)
                {
                    $data['ZipCode'] = $zip;
                }
                
              public function setCountry($country)
                {
                    $data['Country'] = $country;
                }
                
              public function setLevel($level)
                {
                    $data['Confirmed'] = $level;
                }
                
                
              public function Confirm()
                {
                    
                }
                
              public function setLevel($level)
                {
                    
                }
                
              public function registerUser()
                  {
                    
                  }
                
              
              
              public static function loginUser($user, $password) 
                {
                    
                } 
							  
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
								 }
							   parent::disconnect($conn);	 
							  return array_values($users);
						   }
						catch (PDOException $e)
						   {
							   parent::disconnect($conn);
							  die("Query Failed: ". $e->getMessage());
						   }   
					 }
					 
			public static function getUser($email)
					 {
						$conn = parent::connect();
						$sql = "SELECT * FROM ".TBL_USERS." WHERE email = :email";
						
						try
						   {
							  $st = $conn->prepare($sql);
							  $st->bindValue(":email", $email, PDO::PARAM_INT);
							  $st->execute();
							  
							  
							  $user = array();
							
							  foreach ($st->fetchAll() as $row)
								 {
									$user[]=$row;
								 }
							   parent::disconnect($conn); 
							  return array_values($user);
						   }
						catch (PDOException $e)
						   {
							   parent::disconnect($conn);
							  die("Query Failed: ". $e->getMessage());
						   }   
					 }
					 
			public static function getUsersByName($name)
					 {
						$conn = parent::connect();
						$sql = "SELECT * FROM ".TBL_USERS." WHERE name = :name";
						
						try
						   {
							  $st = $conn->prepare($sql);
							  $st->bindValue(":name", $name, PDO::PARAM_INT);
							  $st->execute();
							  
							  
							  $users = array();
							
							  foreach ($st->fetchAll() as $row)
								 {
									$users[]=$row;
								 }
							   parent::disconnect($conn); 
							  return array_values($users);
						   }
						catch (PDOException $e)
						   {
							   parent::disconnect($conn);
							  die("Query Failed: ". $e->getMessage());
						   }   
					 }
					 
			public static function getUsersByLast($last)
					 {
						$conn = parent::connect();
						$sql = "SELECT * FROM ".TBL_USERS." WHERE last = :last";
						
						try
						   {
							  $st = $conn->prepare($sql);
							  $st->bindValue(":last", $last, PDO::PARAM_INT);
							  $st->execute();
							  
							  
							  $users = array();
							
							  foreach ($st->fetchAll() as $row)
								 {
									$users[]=$row;
								 }
							   parent::disconnect($conn); 
							  return array_values($users);
						   }
						catch (PDOException $e)
						   {
							   parent::disconnect($conn);
							  die("Query Failed: ". $e->getMessage());
						   }   
					 }
					 
			public static function getUsersByCountry($country)
					 {
						$conn = parent::connect();
						$sql = "SELECT * FROM ".TBL_USERS." WHERE country = :country";
						
						try
						   {
							  $st = $conn->prepare($sql);
							  $st->bindValue(":country", $country, PDO::PARAM_INT);
							  $st->execute();
							  
							  
							  $users = array();
							
							  foreach ($st->fetchAll() as $row)
								 {
									$users[]=$row;
								 }
							   parent::disconnect($conn); 
							  return array_values($users);
						   }
						catch (PDOException $e)
						   {
							   parent::disconnect($conn);
							  die("Query Failed: ". $e->getMessage());
						   }   
					 }
					 
			public static function getUsersByUserName($username)
					 {
						$conn = parent::connect();
						$sql = "SELECT * FROM ".TBL_USERS." WHERE username = :username";
						
						try
						   {
							  $st = $conn->prepare($sql);
							  $st->bindValue(":username", $username, PDO::PARAM_INT);
							  $st->execute();
							  
							  
							  $users = array();
							
							  foreach ($st->fetchAll() as $row)
								 {
									$users[]=$row;
								 }
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
				   $sql = "UPDATE ".TBL_USERS." SET profile = '".$data[3]."', password = '".$data[4]."', email = '".$data[5]."', gender = '".
						   $data[6]."', country = '".$data[7]."', state = ".$data[8].", phone = ".$data[9].", userlevel = '".$data[10]."', 
						   avatar = '".$data[11]."', ip = '".$data[12]."', lastlogin = '".$data[14]."', notescheck = '".$data[15]."', greeting = "
						   .$data[16].", activated = '".$data[17]."' WHERE signup = '".$data[13]."'"; 
						   
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
					$sql = "INSERT INTO ".TBL_USERS." (name,last,username,profile,password,email,gender,country,                       		  
													   state,phone,userlevel,avatar,ip,signup,lastlogin,notescheck,greeting,activated)
						 VALUES(
						  '".$data[0]."', '".$data[1]."', '".$data[2]."', '".$data[3]."', '".$data[4]."', '".$data[5]."', '".$data[6]."' ,  
						  '".$data[7]."', ".$data[8].", ".$data[9].", '".$data[10]."', '".$data[11]."', '".$data[12]."', '".$data[13]."', 
						  '".$data[14]."', ".$data[15].", '".$data[16]."', '".$data[17]."')";
						  
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
                 
                 
            //******* Private Function Section
         
              private function generateSalt()
                {
             
                }
                
              private function generateKey($zip)
                {
                    
                }
		}


?>
