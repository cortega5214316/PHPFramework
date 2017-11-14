<?php
	
	//session_start();

	//echo ("Checking Session Authorization");

	if (!isset($_SESSION["passcode"]))
	{
		$_SESSION["passcode"] = "NON_AUTH";
		
	}
	else
	{

		$session_code = $_SESSION["passcode"];

		if ($session_code != "NON_AUTH")
		{
			if(!isset($_COOKIE["Passport"]))
			{

				$client_passcode = !empty($_GET['passport']) ? $_GET['passport'] : '';

				if ($session_code != $client_passcode)
				{
					$_SESSION["passcode"] = "NON_AUTH";
					echo ("Error 403: Unauthorized User...");
					exit();
				}
			}
			else
			{
				$cookie_pass = $_COOKIE["Passport"];

				if ($session_code != $cookie_pass)
				{
					$_SESSION["passcode"] = "NON_AUTH";
					echo ("Error 406: Unauthorized User...");
					exit();
				}
			}
		}
		else
		{
			echo ("Error 409: Unauthorized User...session: ". $_SESSION["passcode"]);
			exit();
		}
	}

?>
