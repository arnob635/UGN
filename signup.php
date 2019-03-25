<?php

include("connection.php");

$name =$_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];
<<<<<<< HEAD
//$phone=$_POST['phone'];

$check = "SELECT * FROM bandD
ata WHERE bandName = '$name'";
=======
//$phone=$_POST['phone']; remove phone number [not needed for now]

$check = "SELECT * FROM bandauth WHERE bandName = '$name'";
>>>>>>> 56a5679b9319fac1d8c753cd2907e3fb33d82ea0

$result = mysqli_query($conn,$check);

$num = mysqli_num_rows($result);


//checks if band already exists or not // remove echos later
if($num==1){
	echo "Band already exists";
}
else{
	$reg = "INSERT INTO bandauth(bandName,password,email) VALUES ('$name','$password','$email')";
	if(mysqli_query($conn,$reg)){
		echo "New record created succesfully";
		echo "Welcome to UGN";
	}
	else {
	  echo "Error: " .$sql."<br>".mysqli_error($conn);
	}

}

?>
