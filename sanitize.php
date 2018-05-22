
<?php
class Sanitize{

	function cleanEmail($email){
		$email=trim($email);
		$email=stripslashes($email);
		$email=filter_var($email,FILTER_SANITIZE_EMAIL);
	return $email;

	}
	function cleanText($text){
        $text=htmlspecialchars($text);
		$text=trim($text);
		$text=stripslashes($text);
		$text=filter_var($text,FILTER_SANITIZE_STRING);
		return $text;

	}
	function cleanPassword($pass){
		$pass = trim($pass);
		
		return $pass;
	}

	


}
?>