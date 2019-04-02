<?php

include("connection.php");

$email = $_POST['email'];
$password = $_POST['password'];

$check = "SELECT * FROM bandauth WHERE email = '$email' && password = '$password'";

$result = mysqli_query($conn,$check);

$num = mysqli_num_rows($result);

$getId = "SELECT id FROM bandauth WHERE email = '$email'";

$id = mysqli_query($conn,$getId);

$_SESSION['id'] = $id;


if($num==1){

	echo "Login succesfull";
	echo '<script>

location.replace("http://localhost/UGN/bandprofile0.php")

</script>';
}
else{
	echo "Incorrect Email/password";
}



/*
if (isset ($_POST['login'])) {

//	$num = mysqli_num_rows($result);

	if($num==1){
		if (!empty($_POST["remember"])) {
			setcookie("user_login", $_POST["email"], time()+ (7 * 24 * 60 * 60)); // one week
			setcookie("user_password", $_POST["password"], time()+ (7 * 24 * 60 * 60)); // one week
			//$_SESSION["email"] = $email;

			$getId = "SELECT id FROM bandauth WHERE email = '$email'";

			$id = mysqli_query($conn,$getId);

			$_SESSION['id'] = $id;

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
}*/

?>
