<?php

	require_once("../includes/config.php");
	require_once("../includes/encryption/Key.php");
	require_once("../includes/encryption/Crypto.php");
	require_once("../includes/encryption/Salt.php");
	require_once("../includes/encryption/Core.php");
	require_once("../includes/encryption/Encoding.php");
	require_once("../includes/DataObject.class.php");

	class AuthToken extends DataObject
	{
		private $auth_token = null;
		private $validator = null;
		private $selector = null;
		
		private $userid = null;
		
		function __construct($token)
                  {
                    $this->auth_token = $token;
					$val_sel = explode("::", $token);
					
					$this->selector = $val_sel[0];
					$this->validator = $val_sel[1];
                  }	
	
		public function validate()
			{
				$conn = parent::connect();
				$sql = "SELECT * FROM ".TBL_AUTH_TOKENS." WHERE selector = :sel";
				
				$this->userid = null;
				
				try
				   {
					  $st = $conn->prepare($sql);
					  $st->bindValue(":sel", $this->selector, PDO::PARAM_STR);
					  $st->execute();
					  
					  $count = $st->rowCount();
					  
					  if ($count > 0)
					  {
					  
						  $token_rec = $st->fetch(PDO::FETCH_ASSOC);
						  $db_val_hash = $token_rec["token"];
						  $db_salt = $token_rec["salt"];
						  $db_user = $token_rec["userid"];	
						  
						  // creates a new key class from the db salt
						  $db_salt_class = Key::loadFromAsciiSafeString($db_salt);
						  $db_salt_raw = $db_salt_class->getRawBytes();
						  
						  // Takes the cookie validator and calculates the hash
						  $cookie_hash_raw = Core::pbkdf2('sha256', $this->validator, $db_salt_raw, 1000, 32, true);
						  // Gets the Raw Hash from the Database Validator String
						  $db_hash_raw = Encoding::loadBytesFromChecksummedAsciiSafeString(SALT_HEADER, $db_val_hash);	
						  
						  $hash_matches = Core::hashEquals($cookie_hash_raw, $db_hash_raw);
						  
						  if ($hash_matches)
						  {
							$this->userid = Crypto::decrypt($db_user, $db_salt_class);
						  } 
						  parent::disconnect($conn); 
						  return $this->userid;
					  }
					  else
					  {
							// User Not Founded
						   parent::disconnect($conn); 
						   return $userid;
					  }
				   }
				catch (PDOException $e)
				   {
					   parent::disconnect($conn);
					   file_put_contents('../logs/AUTH_Errors.txt', $e->getMessage(), FILE_APPEND);
					   exit();
				   } 
				
			}
	}

?>
