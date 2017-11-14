<?php

	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT', dirname(dirname(__FILE__)));
	
	$url = filter_input( INPUT_GET, 'link', FILTER_SANITIZE_URL );
	
	echo "Browser Language was configured as...";
	echo "<br />\n";
	echo $url
				
		
	
    

?>
