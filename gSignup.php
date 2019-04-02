<?php
include("connection.php");
require_once('settings.php');
require_once('google-login-api.php');

// Google passes a parameter 'code' in the Redirect Url
if(isset($_GET['code'])) {
	try {
		$gapi = new GoogleLoginApi();
		
		// Get the access token 
		$data = $gapi->GetAccessToken(CLIENT_ID, CLIENT_REDIRECT_URL, CLIENT_SECRET, $_GET['code']);
		
		// Get user information
		$user_info = $gapi->GetUserProfileInfo($data['access_token']);
	}
	catch(Exception $e) {
		echo $e->getMessage();
		exit();
	}
}


$name =$user_info['name'];
$email = $user_info['email'];
$url ="localhost/UGN/bandprofile.php";




$check = "SELECT * FROM bandauth WHERE bandName = '$name'";


$result = mysqli_query($conn,$check);

$num = mysqli_num_rows($result);


//checks if band already exists or not // remove echos later
if($num==1){
	echo "Band already exists";
}


else{
	$reg = "INSERT INTO bandauth(bandName,email) VALUES ('$name','$email')";
	if(mysqli_query($conn,$reg)){
		echo "New record created succesfully";
		echo "Welcome to UGN";

	}
	else {
	  echo "Error: " .$sql."<br>".mysqli_error($conn);
	}

	$id = mysqli_insert_id($conn);

	$_SESSION['id'] = $id;

	$list = "INSERT INTO bandlist(id,bandName,url) VALUES ('$id','$name','$url')";
	if(mysqli_query($conn,$list)){
		echo "New record in bandList created succesfully";
		// Simulate a mouse click:

		echo '<script>

  location.replace("http://localhost/UGN/bandUpdater.html")

</script>';

	}

}
?>
