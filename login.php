<?php

session_start();

$con  =new mysqli('localhost','root','','ugn');



$email = $_POST['userName']; 
$password = $_POST['pass'];

$check = "select * from authenticate where Email = '$email' && Password = '$password'";

$result = mysqli_query($con,$check);

$num = mysqli_num_rows($result);

if($num==1){
	echo "Login succesfull";
}
else{
	echo "Incorrect Email/password";
}
