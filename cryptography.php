<?php
/* Cryptography Script */

function generateRandomCode($length) {
	$code = '';
	
	$possible = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
	
	for($x = 0; $x &lt; $length; $x++) {
		$random = mt_rand(0, strlen($possible)-1);
		
		$code .= $possible[$random];
	}
	
	return $code;
}

function decrypt($key, $encrypted_str) {
	$decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($encrypted_str), MCRYPT_MODE_CBC, md5(md5($key))), &quot;\0&quot;);
	
	return $decrypted;
}

function encrypt($key, $str) {
	$encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $str, MCRYPT_MODE_CBC, md5(md5($key))));
	
	return $encrypted;
}

function getRandomChar($str, $exclude_spaces = TRUE) {
	$random_num = mt_rand(0, strlen($str)-1);
	$random_char = $str[$random_num];
	
	if($exclude_spaces) {
		if($random_char == ' ') {
			$random_char = getRandomChar($str, $exclude_spaces);
		}
	}
	
	return $random_char;
}


?>
