<?php

	$password = "1234567890";
	$salt = base64_encode(mcrypt_create_iv(64, MCRYPT_DEV_URANDOM)); 

	echo $salt;

	echo "\n";

	$mysalt = "PjggPuorbbnkrXZ/gLAhWNJW31OcO4EMsZXrJhapCqePchsmx1UaKFQ5BkulnVQUMgySTTLKdgknD0PyrHbwQQ==";

	$hash = hash_pbkdf2('sha512', $password, $mysalt, 1000, 0, false);

	echo $hash;
	echo "\n";

	$hashenc = base64_encode($hash);

	echo $hashenc;
	echo "\n";

	echo base64_decode($hashenc);


?>
