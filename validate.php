
<?php
class Validate{

	function validateEmail($email){
     
 		return filter_var($email,FILTER_VALIDATE_EMAIL);
	}
	



	function validateText($text){

		if (preg_match("/^[a-zA-Z ]*$/",$text)) {

  			return true;

		}else{
			return false;
		}






	}

	function checkLength($text,$desiredLength){

		if(strlen($text)<$desiredLength){

          return false;
		}else{

			return true;
		}



	}

	function length0(){
		return "This field cant be empty";

	}

	






}

?>