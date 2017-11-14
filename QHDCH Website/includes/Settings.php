<?php

	
	include_once("config.php");
	
	include_once("encryption/Key.php");
	include_once("encryption/Salt.php");
	include_once("encryption/Core.php");
	include_once("encryption/Encoding.php");
	include_once("encryption/Crypto.php");

	const SALT_HEADER = "\xDE\xF0\x00\x00";
	
	
	
	function SetRegCookie($name, $value, $duration)
	{
		setcookie ( $name, $lang, time() + $duration);
	}



	

	function CookieCheck()
	{
		echo "Cookie has never been set...";
			echo "\n";
	}

//	setcookie ( 'Lang', $lang, time() + 60*60*24*30);
	


	function GetLanguage()
	{
		$langs = array();
		
		if(!isset($_COOKIE['Lang']))
		{
			if ($DEBUG_ECHO)
			{
				echo "Cookie has never been set...";
				echo "\n";
			}
			
			$str_browser_language = !empty($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? strtok(strip_tags($_SERVER['HTTP_ACCEPT_LANGUAGE']), ',') : '';
			if ($DEBUG_ECHO)
			{
				echo "Clients Browser Language is " . $str_browser_language;
				echo "\n";
			}
			$str_browser_language = !empty($_GET['language']) ? $_GET['language'] : $str_browser_language;
			if ($DEBUG_ECHO)
			{
				echo "Clients Browser  Requested a new Language " . $str_browser_language;
				echo "\n";
			}
			
			switch (substr($str_browser_language, 0,2))
			{
				case 'de':
					$str_language = 'de';
					break;
				case 'en':
					$str_language = 'en';
					break;
				case 'es':
					$str_language = 'es';
					break;
				case 'fr':
					$str_language = 'fr';
					break;
				case 'it':
					$str_language = 'it';
					break;
				default:
					$str_language = 'en';
					break;
			}
			
			$arr_available_languages 	= array();
			$arr_available_languages[] 	= array('str_name' => 'English', 'str_token' => 'en');
			$arr_available_languages[] 	= array('str_name' => 'Deutsch', 'str_token' => 'de');
			$arr_available_languages[] 	= array('str_name' => 'Espanol', 'str_token' => 'es');
			$arr_available_languages[] 	= array('str_name' => 'French', 'str_token' => 'fr');
			$arr_available_languages[] 	= array('str_name' => 'Italian', 'str_token' => 'it');
			$arr_available_languages[] 	= array('str_name' => 'Portuguese', 'str_token' => 'pt');
			
			$str_available_languages = (string) '';
			
			foreach ($arr_available_languages as $arr_language)
			{
				if ($arr_language['str_token'] !== $str_language)
				{
					$str_available_languages .= '<a href="'.strip_tags($_SERVER['PHP_SELF']).'?language='.$arr_language['str_token'].'" lang="'.$arr_language['str_token'].'" xml:lang="'.	$arr_language['str_token'].'" hreflang="'.$arr_language['str_token'].'">'.$arr_language['str_name'].'</a> | ';
				}
			}
			$str_available_languages = substr($str_available_languages, 0, -3);
			
			if ($DEBUG_ECHO)
			{
				echo $str_available_languages;
			}
			
			return $str_language;

		}
		else
		{
			$cookie_lang = $_COOKIE["Lang"];
			
			if ($DEBUG_ECHO)
			{
				echo "Browser Language Cookie was set...";
				echo "\n";
			
				echo $cookie_lang;
			}
			
			return $cookie_lang;
			
		}
	}
	
	///
	///
	/// This Method will return the browser IP Address
	///
	///
	function Get_Client_IP() 
	{
		$ipaddress = '';
		if (getenv('HTTP_CLIENT_IP'))
			$ipaddress = getenv('HTTP_CLIENT_IP');
		else if(getenv('HTTP_X_FORWARDED_FOR'))
			$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
		else if(getenv('HTTP_X_FORWARDED'))
			$ipaddress = getenv('HTTP_X_FORWARDED');
		else if(getenv('HTTP_FORWARDED_FOR'))
			$ipaddress = getenv('HTTP_FORWARDED_FOR');
		else if(getenv('HTTP_FORWARDED'))
		   $ipaddress = getenv('HTTP_FORWARDED');
		else if(getenv('REMOTE_ADDR'))
			$ipaddress = getenv('REMOTE_ADDR');
		else
			$ipaddress = 'UNKNOWN';
		return $ipaddress;
	}
    
	
    function AutoLogin()
	{
		$login = false;
		
		if(isset($_COOKIE['AuthLog']))
		{
    		$login = true;
		}
		
		return $login;
	}
	
	//
	// This method will get the AuthLog cookie value
	//
	//
	function Get_Auth_Code()
	{
		$code = "";
		
		if(isset($_COOKIE['AuthLog']))
		{
    		$code = $_COOKIE['AuthLog'];
		}
		
		return $code;
	}
	
	function Check_User_Credentials($authCode)
	{
		$auth = false;
		
		
		return $auth;
	}

?>
