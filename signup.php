<?php

include("connection.php");

$name =$_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone=$_POST['phone'];

$check = "SELECT * FROM bandData WHERE bandName = '$name'";

$result = mysqli_query($conn,$check);

$num = mysqli_num_rows($result);

if($num==1){
	echo "Band/Organization already exists";
}
else{
	$reg = "INSERT INTO authenticate(Name,Password,Email) VALUES ('$name','$password','$email')";
	if(mysqli_query($conn,$reg)){
		echo "New record created succesfully";
		echo "Welcome to UGN";
	}
	else {
	  echo "Error: " .$sql."<br>".mysqli_error($conn);
	}

}

?>
