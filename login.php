<?php

include("connection.php");


if (isset ($_POST['login'])) {
	
	$check = "select * from authenticate where Email = '$email' && Password = '$password'";
	$result = mysqli_query($con,$check);

	$num = mysqli_num_rows($result);

	if($num){
		if (!empty($_POST["remember"])) {
			setcookie("user_login", $_POST["email"], time()+ (7 * 24 * 60 * 60)); // one week 
			setcookie("user_password", $_POST["password"], time()+ (7 * 24 * 60 * 60)); // one week
			$_SESSION["Email"] = $email; 

		}
		else{

			if(isset ($_COOKIE["user_login"])){
				setcookie ("user_login","");
			}

			if(isset ($_COOKIE["user_password"])){
				setcookie ("user_password","");
			}

			header("location:index.html"); 
		}
	}

	else{
		$message = "Incorrect Email";
	}
}