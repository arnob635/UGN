<?php

include("connection.php");

$name =$_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];
$url ="localhost/UGN/bandprofile.php";


$check = "SELECT * FROM bandauth WHERE bandName = '$name'";


$result = mysqli_query($conn,$check);

$num = mysqli_num_rows($result);


//checks if band already exists or not // remove echos later
if($num==1){
	echo "Band already exists";
}

else if($name=="" || $password=="" || $email==""){
    alert("Band name and password must be filled out");
    return false;
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

	$id = mysqli_insert_id($conn);

	$list = "INSERT INTO bandlist(id,bandName,url) VALUES ('$id','$name','$url')";
	if(mysqli_query($conn,$list)){
		echo "New record in bandList created succesfully";
	}

}

?>
