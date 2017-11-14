<?php

	include_once("includes/encryption/Key.php");
	include_once("includes/encryption/Salt.php");
	include_once("includes/encryption/Core.php");
	include_once("includes/encryption/Encoding.php");

	const SALT_HEADER = "\xDE\xF0\x00\x00";

	$password = "1234567890";

	$mysalt = "def00000187969f0bab0a936554829cb87f50d8ffb15882d610fa852f596549166955a29318353c25a025f9968d1aa727ba60d40d13dc91187be6ef97de486f410d38c3acbf7bdeb5eea5d2a4b99051ddc71f6e679649a8739cdb76c497896228cf23417704059e2d73b9eb42a6f8b4bc03e058b38a830c54330ec21da78df2e186f0bf5"; 

	$myhash = "def00000cb264d66077b33627ce7195146d305268476da954b5f5d9a72c97e139054927fa752381ef05e13dafefac63b088f8524c940e244b109172f4420fa8cbab562ad2138a89efae66a637beb395a2361498a34bfd78e0c2c6a257d44d0ddc2c5dce1e2549520cc23e8cc68e162bee1450e775629e447b73b6407d818364f8070a4dd"; 

	 
	$retrieved_salt = salt::loadFromAsciiSafeString($mysalt);
	$salt_raw = $retrieved_salt->getRawBytes();

	$retrieved_hash = Encoding::loadBytesFromChecksummedAsciiSafeString64(SALT_HEADER, $myhash);

	//$salt = salt::createNewSalt();

	//$salt_to_save = $salt->saveToAsciiSafeString();

	//$salt_raw = $salt->getRawBytes();

	//echo $salt_to_save;

	//echo "\n";

	$hash = Core::pbkdf2('sha512', $password, $salt_raw, 1000, 64, true);

	$match = Core::hashEquals64($retrieved_hash, $hash);

	//$hash_to_save = Encoding::saveBytesToChecksummedAsciiSafeString64(
	//																	SALT_HEADER,
	//																	$hash
	//																);

	

	//echo $hash_to_save;

	echo "\n";

//	

	if ($match)
	{
		echo "Logged OK";
	}
	else
	{
		echo "Wrong Password...!";
	}


?>
