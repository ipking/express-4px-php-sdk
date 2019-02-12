<?php

namespace express_4px\core;

use function \openssl_encrypt;
use function \openssl_decrypt;

/**
 * Class Cipher
 * Helper class to encrypt/decrypt data with secret key
 */
class Cipher{
	private $secretKey;

	/**
	 * Fixed IV Size
	 */
	const IV_SIZE = 16;

	public function __construct($secretKey){
		$this->secretKey = $secretKey;
	}

	/**
	 * Encrypts the input text using the cipher key
	 *
	 * @param $input
	 * @return string
	 */
	public function encrypt($input){
		$iv = substr(uniqid("", true), 0, Cipher::IV_SIZE);
		$encrypted = openssl_encrypt($input, "AES-256-CBC", $this->secretKey, 0, $iv);
		return base64_encode($iv . $encrypted);
	}

	/**
	 * Decrypts the input text from the cipher key
	 *
	 * @param $input
	 * @return string
	 */
	public function decrypt($input){
		$input = base64_decode($input);
		$iv = substr($input, 0, Cipher::IV_SIZE);
		return openssl_decrypt(substr($input, Cipher::IV_SIZE), "AES-256-CBC", $this->secretKey, 0, $iv);
	}
}
