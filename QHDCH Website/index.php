<?php

	
	include_once("includes/config.php");
	include("includes/Settings.php");
	
	// Get the User Language Setup
	$Browser_Lang = GetLanguage();
	
	
	if ($DEBUG_ECHO)
	{
		echo "Browser Language was configured as...";
		echo "<br />\n";
				
		echo $Browser_Lang;
		echo "<br />\n";
	}
	
	// Gets the User IP Address
	$Browser_IP = Get_Client_IP();
	
	if ($DEBUG_ECHO)
	{
		echo "Browser IP Address: ";
		echo "<br />\n";
			
		echo $Browser_IP;
		echo "<br />\n";
	}
	
	$Auto_Login = AutoLogin();
	
	if ($Auto_Login)
	{
		$Auth_Code = Get_Auth_Code();
		
		if ($Auth_Code != "")
		{
			echo "User Succesfully Loged.... ";
			echo "<br />\n";
		}
		else
		{
			if ($Browser_Lang == 'es')
			{
				echo '<script type="text/javascript">',
						'location.replace("//192.168.1.148/qhdch_site/es/login_es.php")',
						'</script>';
						
			}
			else if ($Browser_Lang == 'en')
			{
				echo '<script type="text/javascript">',
						'location.replace("//192.168.1.148/qhdch_site/en/login_en.php")',
						'</script>';
					
			}
			else
			{
				echo '<script type="text/javascript">',
						'location.replace("//192.168.1.148/qhdch_site/en/login_en.php")',
						'</script>';
			}
		}
	}
	else
	{
		if ($Browser_Lang == 'es')
		{
			echo '<script type="text/javascript">',
					'location.replace("//192.168.1.148/qhdch_site/es/login_es.php")',
					'</script>';
					
		}
		else if ($Browser_Lang == 'en')
		{
			echo '<script type="text/javascript">',
					'location.replace("//192.168.1.148/qhdch_site/en/login_en.php")',
					'</script>';
				
		}
		else
		{
			echo '<script type="text/javascript">',
					'location.replace("//192.168.1.148/qhdch_site/en/login_en.php")',
					'</script>';
		}
	}
    
    

?>
