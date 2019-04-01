<?php

session_start();

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

echo "Connected successfully";

?>
