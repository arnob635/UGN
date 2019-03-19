<?php

session_start();

$con  =new mysqli('localhost','root','','ugn');



$name =$_POST['userName'];
$password = $_POST['pass'];
$email = $_POST['email'];
$isBand=$_POST['isBand'];

$check = "select * from authenticate where Name = '$name'";

$result = mysqli_query($con,$check);

$num = mysqli_num_rows($result);

if($num==1){
	echo "Band/Organization already exists";
}
else{
	$reg = "insert into authenticate (Name,Password,Email,isBand) values ('$name','$password','$email','$isBand')";
	$ruery=mysqli_query($con,$reg);

	echo "Welcome to UGN";
}
