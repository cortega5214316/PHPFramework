<?php

	
	include_once("includes/config.php");

	$langs = array();
	
	$lang = "en";
	
	echo "Cookie has never been set...";
			echo "\n";
	
	//setcookie ( 'language', $lang, time() + 60*60*24*30);

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
		
		if ($str_language == 'es')
		{
			echo '<script type="text/javascript">',
					'location.replace("es/login_es.php")',
				'</script>';
				
		}
		else if ($str_language == 'en')
		{
			echo '<script type="text/javascript">',
					'location.replace("en/login_en.php")',
				'</script>';
			
		}
	}
	else
	{
		$cookie_lang = $_COOKIE["Lang"];
		
		echo $cookie_lang;
	}
	
	
	
    
    
    
	
    
    

?>

