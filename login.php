<?php
$firstNameError='';
$lastNameError='';
$emailError='';
$password1Error='';
$password2Error='';
$DOBError='';
$genderError='';
$error='';

if ($_SERVER['REQUEST_METHOD'] =="POST") {

$regester=true;

	require ('sanitize.php');
	require ('validate.php');

$sanitize = new Sanitize();
$validate = new Validate();
$firstName=$sanitize->cleanText($_POST['firstName']);
$lastName=$sanitize->cleanText($_POST['lastName']);
$email=$sanitize->cleanEmail($_POST['email']);
$password1=$sanitize->cleanPassword($_POST['password1']);
$password2=$sanitize->cleanPassword($_POST['password2']);
$DOB=$_POST['DOB'];
$gender=$_POST['gender'];


if($validate->validateEmail($email)){
	$emailError ="Not a valid Email";
	$regester=false;

}
if ($email==''){
	$emailError=$validate->length0();
	$regester=false;
}





if(!$validate->validateText($firstName)){
	$firstNameError ="Name can only contain letters";
	$regester=false;

}
if (!$validate->checkLength($firstName,4)) {
	$firstNameError ="Name length has to be more than 4 characters";
	$regester=false;

	
}
if ($firstName=='') {
	$firstNameError=$validate->length0();
	$regester=false;
}




if(!$validate->validateText($lastName)){
	$lastNameError ="Name can only contain letters";
	$regester=false;

}
if (!$validate->checkLength($lastName,4)) {
	$lastNameError ="Name length has to be more than 4 characters";
	$regester=false;

}if(strlen($lastName)=='') {
	$lastNameError=$validate->length0();
	$regester=false;
}



if($password1==''){

$password1Error=$validate->length0();

}
if($password2==''){

	$password2Error=$validate->length0();

}
if($password1!=$password2){

	$password2Error="Both passwords must be similar";

}



if($DOB=''){
	$DOBError=$Validate->length0();

}







	

	}
?>


<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="design.css"/>
<head>
<title>Sample login form</title>
</head>
<body>
   <div class="parent">
	<div class="login_container">
		<div class="brand">
			<span>Create an account with Bosco.com its free</span>
		</div>
		<div class="login_description">
			<p>Why Bosco.com<p>
		</div>
		<div class=login_form>
			<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" >
						<input type="text" name="firstName" placeholder="First Name *"><br/>
						<p class="error"><?php echo $firstNameError;?></p>
						<input type="text" name="lastName" placeholder="Last Name *"><br/>
						<p class="error"><?php echo $lastNameError;?></p>
						<input type="email" name="email" placeholder="Email *"><br/>
						<p class="error"><?php echo $emailError; ?></p>
						<input type="password" name="password1" placeholder="Password *"><br/>
						<p class="error"><?php echo $password1Error; ?></p>
						<input type="password" name="password2" placeholder="Confirm Your Password *"><br/>
						<p class="error"><?php echo $password2Error; ?></p>
						<label for="D.O.B">D.O.B*</label><br/>
						<input type="date" name="DOB"><br/>
						<p class="error"><?php echo $DOBError ?></p>
						<label for="gender">Gender*</label><br/>
						<select name="gender"><br/>
							<option>Select</option>
							<option>Male</option>
							<option>Female</option>
							<option>Transgender</option>
						</select>
						<p class="error"><?php echo $genderError; ?></p><br/>

						<input type="submit" name="submit" value="submit"/>

			</form>
		</div>
		
	</div>
	</div>



</body>
</html>
