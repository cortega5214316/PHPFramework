<?php

	
	if(!isset($_COOKIE['Lang']))
	{
		echo "Cookie has never been set...";
	}
	else
	{
		$cookie_lang = $_COOKIE["Lang"];
		
		echo $cookie_lang;
	}
	

?>
