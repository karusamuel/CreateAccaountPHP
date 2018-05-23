<?php
$servername="localhost";
$username="root";
$password="";
$connected=false;

$conn = new mysqli($servername,$username,$password);

if($conn->connect_error){


	die("Failed here ");


}else{
		$sql ="use accountDb";
		if ($conn->query($sql)==true){

          $connected=true;

		}



}




?>