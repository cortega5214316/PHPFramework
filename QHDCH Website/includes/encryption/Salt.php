<?php

	include_once("Core.php");
	include_once("EnvironmentIsBrokenException.php");
	include_once("Encoding.php");

	final class Salt
	{
	    const SALT_CURRENT_VERSION = "\xDE\xF0\x00\x00";
	    const SALT_BYTE_SIZE       = 64;

	    private $salt_bytes = null;

		private $salt_byte_size = 0;

	    /**
	     * Creates new 64 byte random Salt.
	     *
	     * @throws EnvironmentIsBrokenException
	     *
	     * @return Salt
	     */
	    public static function createNewSalt()
		    {
				return new Salt(Core::secureRandom(self::SALT_BYTE_SIZE));
		    }

	    /**
	     * Loads a Salt from its encoded form.
	     *
	     * @param string $saved_salt_string
	     *
	     * @throws BadFormatException
	     * @throws EnvironmentIsBrokenException
	     *
	     * @return salt
	     */
	    public static function loadFromAsciiSafeString($saved_salt_string)
		    {
				$salt_bytes = Encoding::loadBytesFromChecksummedAsciiSafeString64(self::SALT_CURRENT_VERSION, $saved_salt_string);
				return new Salt($salt_bytes);
		    }

	    /**
	     * Encodes the 32 bytes salt into a string of printable ASCII characters.
	     *
	     * @throws EnvironmentIsBrokenException
	     *
	     * @return string
	     */
	    public function saveToAsciiSafeString()
		    {
				return Encoding::saveBytesToChecksummedAsciiSafeString64(
																		self::SALT_CURRENT_VERSION,
																		$this->salt_bytes
																	);
		    }

	    /**
	     * Gets the raw bytes of the salt.
	     *
	     * @return string
	     */
	    public function getRawBytes()
		    {
				return $this->salt_bytes;
		    }

	    /**
	     * Constructs a new Salt object from a string of raw bytes.
	     *
	     * @param string $bytes
	     *
	     * @throws EnvironmentIsBrokenException
	     */
	    private function __construct($bytes)
		    {
				$this->salt_byte_size = Core::ourStrlen($bytes);
				if ($this->salt_byte_size !== self::SALT_BYTE_SIZE)
					{
						throw new EnvironmentIsBrokenException(
											'Bad key length.'
											);
					}
				$this->salt_bytes = $bytes;
		    }

	}
?>
