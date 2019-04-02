<?php

include("connection.php");

$email = $_POST['email'];
$password = $_POST['password'];

$check = "SELECT * FROM admin WHERE Email = '$email' && Password = '$password'";

$result = mysqli_query($conn,$check);

$num = mysqli_num_rows($result);

if($num == 1){
	echo "Login succesfull";

	echo '<script>

location.replace("http://localhost/UGN/admin/index.html")

</script>';
}
else{

	echo "Incorrect Email/password";
}

?>
