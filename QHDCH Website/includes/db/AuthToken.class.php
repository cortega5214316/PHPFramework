<?php

	require_once("../includes/config.php");
	require_once("../includes/encryption/Key.php");
	require_once("../includes/encryption/Salt.php");
	require_once("../includes/encryption/Core.php");
	require_once("../includes/encryption/Encoding.php");

	class AuthToken 
	{
		private $auth_token = null;
		private $validator = null;
		private $selector = null;
		
		function __construct($token)
                  {
                    $this->auth_token = $token;
					$val_sel = explode("::", $token);
					
					$this->selector = $val_sel[0];
					$this->validator = $val_sel[1];
                  }	
	
		public function validate()
		{
			
		}
	}

?>
