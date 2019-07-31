<?php 

//initialise variabl
$username="";
$Email="";
$password="";
$confirm_password="";
$first_name="";
$last_name="";
$Gender="";
$DOB="";
$Address="";
$country="";
$phone_no="";
$status="";
$Hobbies="";
$About_you="";
$skill="";
$About_program="";
$term="";
$Agree="";
$Id=0;




//connect to database
$db=mysqli_connect('localhost','root','','registration');

//check connection
if($db->connect_error){
	die("connection failed:".$db);
}
else{
	echo "connected successfully.";
}
?>