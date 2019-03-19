<?php



//connection details
$servername = "localhost";
$username = "root";
$password = "";
$db = "ugn";

//creating new connection
$conn = new mysqli($servername,$username,$password,$db);

//check connection
if(!$conn){
	die("connection failed: ". mysqli_connect_error());
}



$check = "select name from bandlist where UID = 1";

$result = mysqli_query($conn,$check);

$num = mysqli_num_rows($result);

$row = mysqli_fetch_assoc($result);

if($num==1){
	echo $row['name'];
}
else{
	echo "Incorrect Email/password";
}